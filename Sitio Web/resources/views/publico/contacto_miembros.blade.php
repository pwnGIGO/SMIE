@extends("layouts.plantilla_usuario")
    @section("Contenido_Usuario")

        <script>
            document.title="Contacto y miembros";
        </script>

        <br>
        <table class="tabla_miembros table-hover">
            <thead class="encabezado">
                <td>Cargo</td>
                <td>Nombre</td>
                <td>Teléfono/WhatsApp</td>
                <td>Correo</td>
                <td>Facebook</td>
                <td>Foto</td>
            </thead>
            <tbody>
            <!-- Presidente -->
            <tr>
                <td>Presidente</td>
                <td>Ángel Orlando Noguez González</td>
                <td>5529178364</td>
                <td>Ing.civilyarq.noguez@gmail.com <br>mr.brightside_zeus@hotmail.com</td>
                <td><a href="https://www.facebook.com/orlando.noguez.790?epa=SEARCH_BOX" target="_blank">Orlando Noguez</a></td>
                <td><img src="Imagenes/Miembros/Orlando.jpg" width="100"></td>
            </tr>
            <!-- Vicepresidente -->
            <tr>
                <td>Vicepresidente</td>
                <td>Jesús Alejandro Gallegos Ambrosio</td>
                <td>5582242623</td>
                <td>alejandrogallegos473@gmail.com</td>
                <td><a href="https://www.facebook.com/alejandro.normallskatshot" target="_blank">Alejandro Gallegos</a></td>
                <td><img src="Imagenes/Miembros/Alejandro.jpg" width="100"></td>
            </tr>
            <!-- Suplente de presidente -->
            <tr>
                <td>Suplente del Presidente</td>
                <td>Luis Armando Martínez  Reyes</td>
                <td>5540208640</td>
                <td>bart169169169@gmail.com</td>
                <td><a href="https://www.facebook.com/armando.martinezreyes.319?epa=SEARCH_BOX" target="_blank">Armando Martínez</a></td>
                <td><img src="Imagenes/Miembros/Luis.jpg" width="100"></td>
            </tr>
            <!-- Primer Vocal -->
            <tr>
                <td class="td_miembros">Primer Vocal</td>
                <td class="td_miembros">Jorge David Vera Magaña</td>
                <td class="td_miembros">5528981501</td>
                <td class="td_miembros">vera1977vm@hotmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/davedplay7" target="_blank">David Vera</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/David.jpg" width="100"></td>
            </tr>
            <!-- Torero -->
            <tr>
                <td class="td_miembros">Torero</td>
                <td class="td_miembros">Jessica Saharayd Chávez Petlacalco</td>
                <td class="td_miembros">5576676888</td>
                <td class="td_miembros">kukulkan1904@gmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/petlacaalco" target="_blank">Jessica Petlacalco</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Jessica.jpg" width="100"></td>
            </tr>
            <!-- Coordinador Administrativo -->
            <tr>
                <td class="td_miembros">Coordinador</td>
                <td class="td_miembros">Sandra Correa García</td>
                <td class="td_miembros">5579794277</td>
                <td class="td_miembros">sandra_correa11@hotmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/sandra.correa11?ref=br_rs" target="_blank">Sandra Correa</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Sandra.jpg" width="100"></td>
            </tr>
            <!-- Administrativo -->
            <tr>
                <td class="td_miembros">Administrativo</td>
                <td class="td_miembros">Luis Daniel Ramírez Rendón</td>
                <td class="td_miembros">5542530938<br>57732125</td>
                <td class="td_miembros">r.rendonluisd1405@gmail.com </td>
                <td class="td_miembros"><a href="https://www.facebook.com/luisdaniel.ramirezrendon?__tn__=%2Cd-]-h-R&eid=ARDuyj4zwmxzydxNjoPEFNfbMqbAqNEB3qtywGlEwlolp-CK0UKdjzX2Cned6XKOmQGRilCCMs7A9dbL" target="_blank">Luis Daniel Ramírez Rendón</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Daniel.jpg" width="100"></td>
            </tr>
            <!-- Coordinador -->
            <tr>
                <td class="td_miembros">Coordinador</td>
                <td class="td_miembros">Valeria García García</td>
                <td class="td_miembros"></td>
                <td class="td_miembros">valgrcia2811@gmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/valeria.garcia.1848816" target="_blank">Valeria García</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Valeria.jpg" width="100"></td>
            </tr>
            <!-- Tutor/asesor del SMIE UAM AZC -->
            <tr>
                <td class="td_miembros">Tutor/Asesor del SMIE UAM AZC</td>
                <td class="td_miembros">Dr. Tiziano Olvera Perea</td>
                <td class="td_miembros">5525584511</td>
                <td class="td_miembros">tperea@azc.uam.mx</td>
                <td class="td_miembros"></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Tiziano.jpg" width="100"></td>
            </tr>
            <!-- Presidente del SMIE MI -->
            <tr>
                <td class="td_miembros">presidente del SMIE M.I..</td>
                <td class="td_miembros">Francisco García Alvarez</td>
                <td class="td_miembros"></td>
                <td class="td_miembros">francisco.garcia@smie.com.mx</td>
                <td class="td_miembros"></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Francisco.jpg" width="100"></td>
            </tr>
            <!-- Vicepresidente del SMIE -->
            <tr>
                <td class="td_miembros">Vicepresidente del SMIE</td>
                <td class="td_miembros">Dr. Esteban Astudillo de la Vega</td>
                <td class="td_miembros"></td>
                <td class="td_miembros">esteban.astudillo@smie.com.mx</td>
                <td class="td_miembros"></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Esteban.jpg" width="100"></td>
            </tr>
            <!-- Coordinador del Ing. Civil UAM AZC y Secretario SMIE -->
            <tr>
                <td class="td_miembros">Coordinador  de Ing. Civil UAM AZC y Secretario SMIE</td>
                <td class="td_miembros">Dr. Luciano Roberto Fernández Sola</td>
                <td class="td_miembros">(55)53182229 <br>9000, ext</td>
                <td class="td_miembros"></td>
                <td class="td_miembros"></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Luciano.jpg" width="100"></td>
            </tr>
            <!-- Delegado -->
            <tr>
                <td class="td_miembros">Delegado</td>
                <td class="td_miembros">Armando Romero villa</td>
                <td class="td_miembros">72289665967</td>
                <td class="td_miembros">nando.7rv@gmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/nando.romero.1023" target="_blank">Nando Romero</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Armando.jpg" width="100"></td>
            </tr>
            <!-- Supervisor -->
            <tr>
                <td class="td_miembros">Supervisor</td>
                <td class="td_miembros">Oliver Juda Cruz Tovar</td>
                <td class="td_miembros">9614284397<br>9613272883</td>
                <td class="td_miembros">Juda3810@gmail.com</td>
                <td class="td_miembros"><a href="" target="_blank">Agregar!</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Juda.jpg" width="100"></td>
            </tr>
            <!-- Director General del SMIE -->
            <tr>
                <td class="td_miembros">Director General del SMIE</td>
                <td class="td_miembros">Miguel Angel Guerra Garcia</td>
                <td class="td_miembros">5576058723</td>
                <td class="td_miembros">guerramiguelangel97@gmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/vngl.war" target="_blank">Miguel Angel Guerrera</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Miguel.jpg" width="100"></td>
            </tr>
            <!-- Jefe del area de difucion, relaciones y eventos -->
            <tr>
                <td class="td_miembros">Jefe del area de difucion, relaciones y eventos</td>
                <td class="td_miembros">Martin Alejandro Perez Cruz</td>
                <td class="td_miembros">9512040921</td>
                <td class="td_miembros">mapc0820@gmail.com</td>
                <td class="td_miembros"><a href="https://www.facebook.com/AlexCrossPK" target="_blank">Alex Cross</a></td>
                <td class="td_miembros"><img src="Imagenes/Miembros/Alex.jpg" width="100"></td>
            </tr>
            </tbody>
        </table>
        <br>

    @endsection
