<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use Raju\Streamer\Helpers\VideoStream;

class StreamController extends Controller
{
    public function index(Request $request)
    {
        $streamToken = Str::random(20);
        $filename = 'bigs.mp4';

        $request->session()->put($streamToken, $filename);

        return view('welcome', compact('streamToken'));
    }

    public function stream(Request $request, $filename)
    {
        if (!$request->server('HTTP_RANGE') || $request->server('HTTP_UPGRADE_INSECURE_REQUESTS')) {
            abort(404);
        }

        $filename = $request->session()->get($filename, null);

        if (!$filename) {
            abort(404);
        }

        $videosDir = config('larastreamer.basepath');

        if (file_exists($filePath = $videosDir . "/" . $filename)) {
            $stream = new VideoStream($filePath);
            return response()->stream(function () use ($stream) {
                $stream->start();
            });
        }

        abort(404);
    }
}
