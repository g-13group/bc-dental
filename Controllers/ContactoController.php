<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

class ContactoController

{

    public $connection;

    public function __construct()
    {
        include_once(__DIR__ . "/Connections/conexion.php");
        $this->connection = $conexion;
    }

    public function email()
    {
        try {
            $fecha = date("Y-m-d");
            $hora = date("H:i:s");
            $query = $this->connection->prepare("INSERT INTO g13_leads (nombre, email, tel, mensaje, fecha, hora) values (?,?,?,?,?,?)");
            $query->bind_param("ssssss", $_REQUEST["nombre"], $_REQUEST["correo"], $_REQUEST["telefono"], $_REQUEST["mensaje"], $fecha, $hora);
            $query->execute();

            $mail = new PHPMailer(true);
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'mail.portaldeodontologos.mx';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'hola@portaldeodontologos.mx';                     //SMTP username
            $mail->Password = 'V9VM2)^6-OjQ';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;
            $mail->setFrom($_REQUEST["correo"], $_REQUEST["nombre"]);
            $mail->addAddress('oscar.romero@g13group.com', $_REQUEST["nombre"]);
            $mail->Subject = utf8_encode("Informacion BC Dental") . " " . $_REQUEST["nombre"];
            $mail->Body = "Mensaje: " . $_REQUEST["mensaje"];
            $mail->isHTML(true);
            $mail->send();
            echo json_encode("success");
        } catch (ErrorException $error) {
            echo "Error en" . $error->getMessage();
        }
    }
}