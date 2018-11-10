<?php

/**
 * Static Analysis Results Baseliner (sarb).
 *
 * (c) Dave Liddament
 *
 * For the full copyright and licence information please view the LICENSE file distributed with this source code.
 */

declare(strict_types=1);

namespace DaveLiddament\StaticAnalysisResultsBaseliner\Domain\HistoryAnalyser;

use DaveLiddament\StaticAnalysisResultsBaseliner\Domain\Common\ProjectRoot;

interface HistoryFactory
{
    /**
     * Creates a HistoryAnalyser by passing in HistoryMarker for when BaseLine was created.
     *
     * @param HistoryMarker $historyMarker
     *
     * @throws HistoryAnalyserException
     *
     * @return HistoryAnalyser
     */
    public function newHistoryAnalyser(HistoryMarker $historyMarker, ProjectRoot $projectRoot): HistoryAnalyser;

    /**
     * Return factory for creating a HistoryMarker from a string representation of it.
     *
     * @return HistoryMarkerFactory
     */
    public function newHistoryMarkerFactory(): HistoryMarkerFactory;

    /**
     * Returns Identifier for HistoryMarker.
     *
     * @return string
     */
    public function getIdentifier(): string;
}
