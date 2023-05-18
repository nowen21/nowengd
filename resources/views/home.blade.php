@extends('layouts.app')

@section('content')

<table class="table" width="160">
    <thead>
        <tr>
            <th colspan="2">
                <img name="menu_r3_c1" src="menu/menu_r5_c1.gif" alt="Presione para actualizar valore de las carpetas" height="31" border="0">
            </th>

        </tr>
    </thead>
    <tbody>
        <tr valign="top">
            <td>
                <table class="table table-striped eMenu">
                    <tr>
                        <td valign="top">
                            <table class="table table-striped">
                                <tr>
                                    <td valign="middle">
                                        <?php
                                        $i = 1;
                                        $phpsession = true;
                                        $data = $fechah = date("dmy") . "_" . time();
                                        $num_exp = 1;
                                        ?>
                                        <a onclick="cambioMenu(<?= $i ?>);" href='cuerpoAgenda.php?<?= $phpsession ?>&agendado=1&fechah=<?php echo "$fechah&nomcarpeta=$data&tipo_carpt=0"; ?>' class="menu_princ menu3" target="mainFrame" title="Carpeta de agendados para tr&aacute;mite" alt="Carpeta de agendados" aria-label="Carpeta de agendados para tr&aacute;mite, usted tiene <?php echo $num_exp; ?> radicados">
                                            <?php echo "Agendado($num_exp)"; ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr valign="middle">
                                    <td width="125">
                                        <a onclick="cambioMenu(<?= $i ?>);" href='cuerpoAgenda.php?<?= $phpsession ?>&agendado=2&fechah=<?php echo "$fechah&nomcarpeta=$data&&tipo_carpt=0&adodb_next_page=1"; ?>' class="menu_princ menu3" target="mainFrame" title="Carpeta de Agendado vencido" aria-label="Carpeta radicados agendados que ya se han vencido,usted tiene <?php $num_exp; ?> radicados" alt="Carpeta Agendado vencido">
                                            <?php echo "Agendado Vencido(<font color='#990000'>$num_exp</font>)"; ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $numerot = 1;
                                ?>
                                <tr valign="middle">
                                    <td width="125">
                                        <a onclick="cambioMenu(<?= $i ?>);" href='cuerpoinf.php?<?= $phpsession ?>&<?= "mostrar_opc_envio=1&orderNo=2&fechaf=$fechah&carpeta=8&nomcarpeta=Informados&orderTipo=desc&adodb_next_page=1"; ?>' class="menu_princ menu3" target="mainFrame" alt='Radicados Informados' aria-label="Radicados que le han sido Informados, usted tiene <?php echo $numerot; ?>  radicados" title="Radicados Informados">
                                            Informados (<?= $numerot ?>) <? $i++; ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr valign="middle">
                                    <td width="125">
                                        <a onclick="cambioMenu(<?= $i ?>);" href='cuerpoTx.php?<?= $phpsession ?>&fechah=<?php echo "$fechah&nomcarpeta=$data&tipo_carpt=0"; ?>' class="menu_princ menu3" target="mainFrame" title="&Uacute;ltimas transacciones del usuario" aria-label="&Uacute;ltimas transacciones del usuario" alt="&Uacute;ltimas transacciones del Usuario">
                                            Transacciones
                                        </a>
                                    </td>
                                </tr>
                                <tr valign="middle">

                                    <td width="125">
                                        <a class="menu_princ" id="submenu3item" alt="Despliegue Administración de Carpetas Personales" title="Despliegue de Carpetas Personales" aria-label="Despliegue Administración de Carpetas Personales" name="marcaPersonales">
                                            Carpetas Personales
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div id="folders">div folders</div>
                <table width="150" border="0" cellpadding="0" cellspacing="0" class="table table-striped " id="carpersolanes" bgcolor="cacac9">
                    <tr>
                        <?php
                        $krd = 'nowen21@gmail.com';
                        ?>
                        <td>
                            <a class="vinculos" id="itemNuevaCarp" href="crear_carpeta.php?<?= $phpsession ?>&krd=<?= $krd ?>&<? echo 'fechah=$fechah&adodb_next_page=1'; ?>" target='mainFrame' alt='Creacion de Carpetas Personales' aria-label='Creacion de Carpetas Personales' title='Creacion de Carpetas Personales'>
                                <font size=2>Nueva carpeta</font>
                            </a>
                        </td>
                    </tr>
                    carpetas de cada usuario
                    <?php
                    $numdata = 1;
                    $detalle = 'algo';
                    ?>

                    <tr>
                        <td height="18">
                            $conteoRegistros < 9 <a href="cuerpo.php?<?= $phpsession ?>&fechah=<?= $fechah ?>&tipo_carp=1&carpeta=<?= $numdata ?>&nomcarpeta=<?= $data ?> (Personal) " alt="Carpeta Personal <?= $detalle ?>" title="Carpeta Personal <?= $detalle ?>" aria-label="Carpeta Personal <?= $detalle ?>" class="itemsSubmenu3" target="mainFrame"><? echo "$data ($numerot)"; ?>
                                </a>
                        </td>
                    </tr>

                    <tr>

                        <td height="18">
                            $conteoRegistros >= 9
                            <a href="cuerpo.php?<?= $phpsession ?>&fechah=<?= $fechah ?>&tipo_carp=1&carpeta=<?= $numdata ?>&nomcarpeta=<?= $data ?> (Personal) " alt="Carpeta Personal <?= $detalle ?>" title="Carpeta Personal <?= $detalle ?>" aria-label="Carpeta Personal <?= $detalle ?>" class="itemsSubmenu3parte" target="mainFrame"><? echo "$data ($numerot)"; ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td height="18">
                            $conteoRegistros == 8
                            <a href="cuerpo.php?<?= $phpsession ?>&fechah=<?= $fechah ?>&tipo_carp=1&carpeta=<?= $numdata ?>&nomcarpeta=<?= $data ?> (Personal) " alt="Carpeta Personal <?= $detalle ?>" title="Carpeta Personal <?= $detalle ?>" aria-label="Carpeta Personal <?= $detalle ?>" class="itemsSubmenu3segunda" target="mainFrame"><? echo "$data ($numerot)"; ?></a>
                        </td>
                    </tr>

                </table>
            </td>

        </tr>

    </tbody>
</table>
@endsection