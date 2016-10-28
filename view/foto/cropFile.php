<?php
if(empty($_POST))
    exit(header('Location: ../recorte_de_imagens/'));
else{
    sleep(1);
    $fileType = $_POST['imgType'];
    $imgName  = $_POST['imgName'];
    $id = $_POST['imgId'];
    define('OUTPUT', 'imagens/thumbnail-' . $imgName);
    if($fileType == 'image/png')
        $img = imagecreatefrompng('imagens/' . $imgName);
    else
        $img = imagecreatefromjpeg('imagens/' . $imgName);

    $imgWidth  = imagesx($img);
    $imgHeight = imagesy($img);

    $newImage = imagecreatetruecolor(160,160);
    imagecopyresampled($newImage, $img, 0, 0, $_POST['x'], $_POST['y'], 160, 160, $_POST['w'], $_POST['h']);
    if($fileType == 'image/png')
        $finalImage = imagepng($newImage, OUTPUT);
    else
        $finalImage = imagejpeg($newImage, OUTPUT);
    if($finalImage){
        #$id = $_SESSION['id'];

        require_once ('../../model/ClienteModel.class.php');
        $cliente = new Cliente();
        $thumb = 'thumbnail-' . $imgName;
        $cliente->setFoto($thumb);
        if($cliente->gravarFoto($id)){?>
            <p><a href="http://localhost/projetos/PBL-Eng.Software/inicio?id=<?php echo $id; ?>" class="btn btn-primary btn-outline with-arrow" style="width: 100%">Pronto! Vamos entrar no Homer? <i class="icon-arrow-right"></i></a></p>

        <?php }

    }else {
        echo 'Ocorreu um erro ao tentar criar a nova imagem';
    }
}
?>