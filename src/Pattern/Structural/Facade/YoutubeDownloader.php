<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Facade;

class YoutubeDownloader
{
    protected $youtube;

    protected $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    /**
     * @param string $url
     * @param string $title
     * @return FFMpegVideo
     */
    public function downloadVideo(string $url, string $title): string
    {
        $this->youtube->fetchVideo($url);
        $this->youtube->saveAs("/path", $title);

        $video = $this->ffmpeg->open("/path");
        $video->filters();

        return 'Video link';
    }
}