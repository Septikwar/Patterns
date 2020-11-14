<?php
declare(strict_types=1);


namespace App\Pattern\Structural\Facade;


class FFMpegVideo
{
    /**
     * @var string
     */
    private $video;

    /**
     * @param string $video
     */
    public function __construct(string $video)
    {
        $this->video = $video;
    }

    /**
     * @return void
     */
    public function filters(): void {
        echo "Apply filters<br>";
    }
}