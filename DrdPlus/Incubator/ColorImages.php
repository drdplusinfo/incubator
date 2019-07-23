<?php declare(strict_types=1);

namespace DrdPlus\Incubator;

use Granam\Strict\Object\StrictObject;

class ColorImages extends StrictObject implements \IteratorAggregate
{
    /**
     * @var string
     */
    private $imagesRootDir;

    public function __construct(string $imagesRootDir)
    {
        $this->imagesRootDir = $imagesRootDir;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->scanForColorImages($this->imagesRootDir));
    }

    /**
     * @param string $directory
     * @param string $imagesRelativeRoot
     * @return array|string[]
     */
    private function scanForColorImages(string $directory, string $imagesRelativeRoot = ''): array
    {
        if (!is_dir($directory)) {
            return [];
        }
        $images = [];
        $imagesRelativeRoot = \rtrim($imagesRelativeRoot, '\/');
        foreach (\scandir($directory, \SCANDIR_SORT_NONE) as $folder) {
            $folderPath = $directory . '/' . $folder;
            if (\is_dir($folderPath)) {
                if ($folder === '.' || $folder === '..' || $folder === '.gitignore') {
                    continue;
                }
                $imagesFromDir = $this->scanForColorImages(
                    $folderPath,
                    ($imagesRelativeRoot !== '' ? ($imagesRelativeRoot . '/') : '') . $folder
                );
                if ($folder === 'generic') {
                    continue;
                }
                foreach ($imagesFromDir as $imageFromDir) {
                    $images[] = $imageFromDir;
                }
            } elseif (\is_file($folderPath) && \strpos($folder, '-color') !== false) {
                $images[] = ($imagesRelativeRoot !== '' ? ($imagesRelativeRoot . '/') : '') . $folder; // intentionally relative path
            }
        }

        return $images;
    }
}