<?php
$arquivos = [];
// cria array de arquivos index.php
// acessa ./src/
$lectureAr = array_diff(scandir("./src", 1), array('..', '.'));
foreach ($lectureAr as $lectureDir){
    // procura por ./src/lectureX
    if(substr($lectureDir, 0, 7) === 'lecture'){
        // acessa ./src/lectureX
        $indexAr = array_diff(scandir("./src/$lectureDir", 1), array('..', '.'));
        foreach ($indexAr as $indexDir){
            // procura por ./src/lectureX/index.php
            // procura por ./src/lectureX/partY/index.php
            if($indexDir === 'index.php'){
                array_push($arquivos, "./src/$lectureDir/index.php");
            } else if(substr($indexDir, 0, 4) === 'part'){
                array_push($arquivos, "./src/$lectureDir/$indexDir/index.php");
            }
        }
    }
}

for ($i = 0; $i < count($arquivos); $i++){
    if(file_exists($arquivos[$i])){
        echo "<h1>{$arquivos[$i]}</h1>";
        echo '<pre>';
        executaComNamespace($arquivos[$i], "arquivo_$i");
        echo '</pre>';
        echo "<hr>";
    }
}

// https://stackoverflow.com/a/16462550
function executaComNamespace($nomeArquivo, $namespace) {
    $str = file_get_contents($nomeArquivo);

    $php_start = 0;

    $tag = '<?php';
    $endtag = '?>';

    $start_pos = $php_start + strlen($tag);
    $end_pos = strpos($str, $endtag, $start_pos); 

    $php_code = substr($str, $start_pos, $end_pos - $start_pos);
    if (strtolower(substr($php_code, 0, 3)) == 'php')
        $php_code = substr($php_code, 3);

    $part1 = "namespace $namespace ;";

    eval($part1 . $php_code);
}
