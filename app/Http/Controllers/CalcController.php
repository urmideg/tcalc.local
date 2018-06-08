<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
 /**
 * Точка входа в приложение
 *
 * @param  Request $request экземпляр текущего HTTP-запроса
 * @return View             представление
 */
    public function index(Request $request)
    {
        $this->validate($request, [
            'angle' => 'nullable|numeric',
            'type' => 'nullable',
            'operation' => 'nullable',
        ]);
        $angle = $request['angle'];
        $type = $request['type'];
        $operation = $request['operation'];
        $checked[$operation] = 'checked';
        $result = null;
        if (isset($request['calculate'])) {
            $result = $this->operation($angle, $type, $operation);
        }
        return view('index', [
            'angle' => $angle,
            'type' => $type,
            'checked' => $checked,
            'result' => $result,
        ]);
    }

    /**
     * Тригонометрические операции
     *
     * @param  integer|double    $angle   величина угла
     * @param  string $operation единица измерения угла
     * @return string            результат операции
     */
    public function operation($angle, $type, $operation)
    {
        $message = $operation . " (" . $angle;
        // начало исправления ошибки
        
        // конец исправления ошибки
        switch ($operation) {
            case "sin":
                $result = sin($angle);
                break;
            case "cos":
                $result = cos($angle);
                break;
            case "tg":
                if ($angle == pi() / 2 || $angle == 3 * pi() / 2) {
                    $result = "не существует";
                } else {
                    $result = tan($angle);
                }
                break;
            case "ctg":
                if ($angle == 0 || $angle == pi() || $angle == 2 * pi()) {
                    $result = "не существует";
                } else {
                    $result = 1 / tan($angle);
                }
                break;
        }
        $message .= ") = " . $result;
        return $message;
    }
}
