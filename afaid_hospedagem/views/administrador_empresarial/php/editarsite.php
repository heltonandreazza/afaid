<!-- classe responsavel por pegar dados da view e cadastrar avaliacao do tipo site -->
<?php
session_start();
require_once('../../../classes/DB.class.php');
require_once('../../../classes/Login.class.php');
require_once '../../../src/models/Perfil.php';
require_once('../../../src/models/Avaliacao.php');
require_once('../../../src/models/Site.php');
require_once('../../../src/controllers/AvaliacaoDAO.php');
require_once('../../../src/controllers/AdministradorEmpresarialDAO.php');

$idpost = ($_POST['idsite']);
$url = ($_POST['url']);
$nome = ($_POST['sitenome']);

$objSite = new Admempresa();
$objSite->_setNome($nome);
$objSite->_setUrl($url);
$objSite->_setIdsite($idpost);

 $objSite->editarsite();

header("Location:../gerenciarsite.php");