<?php

$specDir = realpath(dirname(__FILE__) . '/../src/spec');
$iter = new GlobIterator($specDir . '/*.md');
$summaryFile = realpath(dirname(__FILE__) . '/../src/SUMMARY.md');
$tocPattern = "/<!-- Begin TOC -->(.*)<!-- End TOC -->\n/s";

$toc = "<!-- Begin TOC -->\n";
$toc .= "<!-- The TOC is autogenerated. Do not remove the lines \"Begin TOC\" or \"End TOC\". -->\n";

foreach ($iter as $item) {
    if (strpos($item->getFilename(), '00-') === 0) {
        // Skip the php-langspec generated TOC.
        continue;
    }

    $file = $item->openFile();
    $chapter = trim($file->fgets(), "# \t\n\r\0\x0B");

    $toc .= sprintf("- [%s](./spec/%s)\n", $chapter, $item->getFilename());
}

$toc .= "<!-- End TOC -->\n";

$summary = file_get_contents($summaryFile);
$summary = preg_replace($tocPattern, $toc, $summary);

file_put_contents($summaryFile, $summary);

echo "TOC generated!\n";
