<?php

namespace App\Http\Controllers;

use App\Services\FootballStats;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FootballController extends Controller
{
    public function showConvertSnapCounts()
    {
        return view('football.snap-counts', [
            'rushingReceivingInput'       => '',
            'passingInput'                => '',
            'snapCountInput'              => '',
        ]);
    }

    public function convertSnapCounts(Request $request)
    {
        $service = new FootballStats();

        Storage::disk('public')->put('players.php', "<?php \n return " . $this->arrayexport($service->convertStats($request->rawSnapCounts, $request->rawPassingStats, $request->rawRushingReceivingStats)) . ';');

        return redirect()->back();
    }

    /**
     * @param array
     * @return string
     */
    public function arrayexport($array)
    {
        $export = var_export($array, true);
        $patterns = [
            "/array \(/"                       => '[',
            "/^([ ]*)\)(,?)$/m"                => '$1]$2',
            "/=>[ ]?\n[ ]+\[/"                 => '=> [',
            "/([ ]*)(\'[^\']+\') => ([\[\'])/" => '$1$2 => $3',
        ];
        $export = preg_replace(array_keys($patterns), array_values($patterns), $export);

        return $export;
    }
}
