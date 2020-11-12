<?php
declare(strict_types=1);


namespace App\Pattern\Structural\Facade;


class FFMpeg
{
    /**
     * @param string $video
     * @return FFMpegVideo
     */
    public function open(string $video): FFMpegVideo {
        return new FFMpegVideo($video);
    }
}