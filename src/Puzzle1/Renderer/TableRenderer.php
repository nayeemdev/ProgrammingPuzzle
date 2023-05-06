<?php

namespace ProgrammingPuzzle\Puzzle1\Renderer;

class TableRenderer
{
    public function render(array $data): string
    {
        if (empty($data)) {
            return 'No data found to display as table';
        }
        
        if (!isset($data[0])) {
            $data = [$data];
        }
        
        $table = '<table>';
        $table .= $this->renderHeader($data[0]);
        $table .= $this->renderRows($data);
        $table .= '</table>';
        
        return $table;
        
    }
    
    private function renderHeader(array $data): string
    {
        $tableHeader = '<tr>';
        foreach ($data as $key => $value) {
            $tableHeader .= '<th>' . $key . '</th>';
        }
        
        $tableHeader .= '</tr>';
        
        return $tableHeader;
    }
    
    private function renderRows(array $data): string
    {
        $tableBody = '';
        foreach ($data as $row) {
            $tableBody .= '<tr>';
            foreach ($row as $value) {
                $tableBody .= '<td>' . $value . '</td>';
            }
            $tableBody .= '</tr>';
        }
        
        return $tableBody;
    }
    
    // TODO: in future the search and pagination will be here, as now this is not the main focus of this puzzle
}
