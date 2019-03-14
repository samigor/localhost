<?PHP $A_rows = array(
    array(1, 2, 3, 4),
    array(1, 4, 1, 2),
    array(3, 7, 12, 10),
    array(2, 4, 10, 2)
);

$B = array(30, 20, 93, 48);

roots_mat($A_rows, $B);

function roots_mat($A_rows, $B)
{

    $resultat = array();
    
//  det_A = |A| -вычислить определитель матрицы
    $det_A = get_det($A_rows, 1);
    
/*    $A = $A_rows;
//    $resultat [] = matrix(count($A), 1);
//    сols(arg) - возвращает кол-во столбцов в матрице
//    matrix(int, int) -- возвращает нулевую матрицу указанных аргументами размеров

    for ($i = 1; $i <= count($A); $i = $i + 1) {
//      $tmp_mat = matrix(count($A), 1);
        $tmp_mat = array();

        for ($j = 1; $j <= count($A[$i]); $j = $j + 1) {

            if ($j == $i) {
                $tmp_mat [] = $B;

//                $tmp_mat = augment($tmp_mat, $B);
//                augment (...)- функция возвращает массив образованный последовательным
//                размещением аргументов друг рядом с другом слева направо.
//                Аргументы могут быть скалярами, векторами, или матрцами с одинаковым кол-вом строк

            } else {
//                $tmp_mat [] = get_col($A, $j);
//                $tmp_mat = augment($tmp_mat, col($A, $j));
//                col(array, int) - возвращает указанный столбец матрицы или вектора
            }

//            $resultat[$i] = |(submatrix($tmp_mat, 1, count($A), 2, count($A) +1))| / $det_A;

            // submatrix(array, int, int, int, int) - возвращает субматрицу составленного из
            // заданного промежутка строк и столбцов, определенной первым аргументом матрицы

        }
    }

    return $resultat;*/

}



function get_det($rows, $c)
{
    

    for ($i = 0; $i < 4; $i++) {

        $arr = array();

        if ($i == 0 && $c == 1) {
            $res[] = $rows[0];
            continue;
        } else if ($c == 2) {
            if ($i == 0) {
                $res[] = $rows[0];
                continue;
            }
            if ($i == 1) {
                $res[] = $rows[1];
                continue;
            }

            if ($i == 3) {
                $res[] = $rows[3];
                continue;
            }

        } else if ($c == 3) {

            if ($i == 0) {
                $res[] = $rows[0];
                continue;
            }
            if ($i == 1) {
                $res[] = $rows[1];
                continue;
            }
            if ($i == 2) {
                $res[] = $rows[2];
                continue;
            }

        } else {
        }

        for ($j = 0; $j < 4; $j++) {

            if ($j == 0 && $c == 1) {
                echo $x = $rows[$i][0] / $rows[0][0];
            }

            if ($j == 0 && $c == 2) {
                $x = $rows[2][1] / $rows[1][1];
            }

            if ($j == 0 && $c == 3) {
                $x = $rows[3][2] / $rows[2][2];
            }

            if ($c == 1)
                $arr [] = -($x * $rows[$c - 1][$j]) + $rows[$i][$j];

            if ($c == 2) {
                $arr [] = -($x * $rows[1][$j]) + $rows[$i][$j];
            }

            if ($c == 3) {
                $arr [] = -($x * $rows[2][$j]) + $rows[$i][$j];
            }
        }
        $res[] = $arr;
    }

   $c++;

    if ($c == 4) {
         $data =  $res[0][0] * $res[1][1] * $res[2][2] * $res[3][3];
        return $data ;
    } else {
        return get_det($res, $c);
    }

}

?><hr>