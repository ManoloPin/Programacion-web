<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta tags -->
    <title>Formulario</title>
    <meta name="keywords" content="Desarrollo Formulario web" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
   <div id="frmContact">
            <div class="copyright">
            <p>Administrar <a href="index2.php"> Ingresar</a></p>
        </div>
    <div class="banner">
        <div class="heading">
            <h1>Programacion Web</h1>
        </div>
        <div class="container">
            <div class="heading">
                <h2>Complete la Informacion del formularios</h2>
                <p>Datos Personales</p>
            </div>
            <div class="agile-form">
                <form action="insertar.php" method="GET" id="registrar">
                    <ul class="field-list">
                        <li>
                            <label class="form-label"> 
								Nombres
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text"  id="nombre" name="nombre" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Apellido
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" id="apellido" name="apellido" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Direcion de Correo
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="email" id="correo"  name="correo" placeholder="" required>

                            </div>
                        </li>
                        <div class="heading">
                            <p>Datos Bancarios</p>
                        </div>
                        <li>
                            <label class="form-label">
							   Tipo de Tarjeta
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input dob">
                                <span class="form-sub-label">
									<select  id="tarjeta" name="tarjeta" >
										<option>&nbsp;</option>
										<option value="1"> Credito </option>
										<option value="2"> Debito </option>
										<option value="3"> Prepago </option>
										<option value="4">Comercial</option>
										<option value="5">Empresarial </option>
										
									</select>
								</span>
                                <span class="form-sub-label">
									<select  id="Franquisia" name="Franquisia">
										<option>&nbsp;</option>
										<option value="Visa"> Visa </option>
										<option value="Master Card"> Master Card </option>
										<option value="American Express"> American Express </option>
										<option value="Dinners Club"> Dinners Club </option>
										
									 </select>
								</span>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Titular
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" id="Titular" name="Titular" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Numero de Tarjeta
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="number" id="tarjeta_numero" name="tarjeta_numero" placeholder="" required>
                            </div>
                        </li>


                        <li>
                            <label class="form-label">
							   Fecha Caducacion
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input dob">
                                <span class="form-sub-label">
									<select id="anoc" name="anoc" class="año">
										<option>&nbsp;</option>
										<option value="2018"> 2018 </option>
										<option value="2019"> 2019 </option>
										<option value="2020"> 2020 </option>
										<option value="2021"> 2021 </option>
										<option value="2022"> 2022 </option>
										<option value="2023"> 2023 </option>
										<option value="2024"> 2024 </option>
										<option value="2025"> 2025 </option>
										<option value="2026"> 2026 </option>
										<option value="2027"> 2027 </option>
										<option value="2028"> 2028 </option>
										<option value="2029"> 2029 </option>
										<option value="2030"> 2030 </option>
										<option value="2031"> 2031 </option>
									</select>
									<label class="form-sub-label1"> Año </label>
								</span>
                                <span class="form-sub-label">
									<select id="mesc" name="mesc">
										<option>&nbsp;</option>
										<option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
									 </select>
									<label class="form-sub-label1"> Mes</label>
								</span>
                                <span class="form-sub-label">
								<label class="form-sub-label1"> cvv2 </label>
									<input type="text" class="cvv" id="cvv2" name="cvv2" placeholder=" Nuemro CVV" required>
									
								</span>
                            </div>
                        </li>
                        <div class="heading">
                            <p>Direcion de Residencia</p>
                        </div>


                        <li>
                            <label class="form-label"> 
								Nombre
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" id="Nombre_1" name="Nombre_1" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Numero telefonico
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" id="tel" name="tel" placeholder="" required>
                            </div>
                        </li>

                        <li>
                            <label class="form-label">
							   Direccion
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input add">
                                <span class="form-sub-label">
									<input type="text"  id="direccion" name="direccion" placeholder=" " required>
									<label class="form-sub-label1"> Direccion de Residencia </label>
								</span>
                                <span class="form-sub-label">
									<input type="text" id="Localidad" name="Localidad" placeholder=" " required>
									<label class="form-sub-label1"> Localidad </label>
								</span>
                                <span class="form-sub-label">
									<input type="text" id="city" name="city" placeholder=" " required>
									<label class="form-sub-label1"> Ciudad </label>
								</span>
                                <span class="form-sub-label">
									<input type="text" id="state" name="state" placeholder=" " required>
									<label class="form-sub-label1"> Estado o Provincia </label>
								</span>
                                <span class="form-sub-label">
									<input type="text" id ="zipcode" name="zipcode" placeholder=" " required>
									<label class="form-sub-label1"> Codigo Postal </label>
								</span>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							  Pais
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" id="Pais" name="Pais" required>
                                    <option value="">&nbsp;</option>
                                    
                                    <option value="Afganistán" id="AF">Afganistán</option>
                                    <option value="Albania" id="AL">Albania</option>
                                    <option value="Alemania" id="DE">Alemania</option>
                                            <option value="Andorra" id="AD">Andorra</option>
                                            <option value="Angola" id="AO">Angola</option>
                                            <option value="Anguila" id="AI">Anguila</option>
                                            <option value="Antártida" id="AQ">Antártida</option>
                                            <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                            <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                            <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                            <option value="Argelia" id="DZ">Argelia</option>
                                            <option value="Argentina" id="AR">Argentina</option>
                                            <option value="Armenia" id="AM">Armenia</option>
                                            <option value="Aruba" id="AW">Aruba</option>
                                            <option value="Australia" id="AU">Australia</option>
                                            <option value="Austria" id="AT">Austria</option>
                                            <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                            <option value="Bahamas" id="BS">Bahamas</option>
                                            <option value="Bahrein" id="BH">Bahrein</option>
                                            <option value="Bangladesh" id="BD">Bangladesh</option>
                                            <option value="Barbados" id="BB">Barbados</option>
                                            <option value="Bélgica" id="BE">Bélgica</option>
                                            <option value="Belice" id="BZ">Belice</option>
                                            <option value="Benín" id="BJ">Benín</option>
                                            <option value="Bermudas" id="BM">Bermudas</option>
                                            <option value="Bhután" id="BT">Bhután</option>
                                            <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                            <option value="Birmania" id="MM">Birmania</option>
                                            <option value="Bolivia" id="BO">Bolivia</option>
                                            <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                            <option value="Botsuana" id="BW">Botsuana</option>
                                            <option value="Brasil" id="BR">Brasil</option>
                                            <option value="Brunei" id="BN">Brunei</option>
                                            <option value="Bulgaria" id="BG">Bulgaria</option>
                                            <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                            <option value="Burundi" id="BI">Burundi</option>
                                            <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                            <option value="Camboya" id="KH">Camboya</option>
                                            <option value="Camerún" id="CM">Camerún</option>
                                            <option value="Canadá" id="CA">Canadá</option>
                                            <option value="Chad" id="TD">Chad</option>
                                            <option value="Chile" id="CL">Chile</option>
                                            <option value="China" id="CN">China</option>
                                            <option value="Chipre" id="CY">Chipre</option>
                                            <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                            <option value="Colombia" id="CO">Colombia</option>
                                            <option value="Comores" id="KM">Comores</option>
                                            <option value="Congo" id="CG">Congo</option>
                                            <option value="Corea" id="KR">Corea</option>
                                            <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                            <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                            <option value="Costa Rica" id="CR">Costa Rica</option>
                                            <option value="Croacia" id="HR">Croacia</option>
                                            <option value="Cuba" id="CU">Cuba</option>
                                            <option value="Dinamarca" id="DK">Dinamarca</option>
                                            <option value="Djibouri" id="DJ">Djibouri</option>
                                            <option value="Dominica" id="DM">Dominica</option>
                                            <option value="Ecuador" id="EC">Ecuador</option>
                                            <option value="Egipto" id="EG">Egipto</option>
                                            <option value="El Salvador" id="SV">El Salvador</option>
                                            <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                            <option value="Eritrea" id="ER">Eritrea</option>
                                            <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                            <option value="Eslovenia" id="SI">Eslovenia</option>
                                            <option value="España" id="ES">España</option>
                                            <option value="Estados Unidos" id="US">Estados Unidos</option>
                                            <option value="Estonia" id="EE">Estonia</option>
                                            <option value="c" id="ET">Etiopía</option>
                                            <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                            <option value="Filipinas" id="PH">Filipinas</option>
                                            <option value="Finlandia" id="FI">Finlandia</option>
                                            <option value="Francia" id="FR">Francia</option>
                                            <option value="Gabón" id="GA">Gabón</option>
                                            <option value="Gambia" id="GM">Gambia</option>
                                            <option value="Georgia" id="GE">Georgia</option>
                                            <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                            <option value="Ghana" id="GH">Ghana</option>
                                            <option value="Gibraltar" id="GI">Gibraltar</option>
                                            <option value="Granada" id="GD">Granada</option>
                                            <option value="Grecia" id="GR">Grecia</option>
                                            <option value="Groenlandia" id="GL">Groenlandia</option>
                                            <option value="Guadalupe" id="GP">Guadalupe</option>
                                            <option value="Guam" id="GU">Guam</option>
                                            <option value="Guatemala" id="GT">Guatemala</option>
                                            <option value="Guayana" id="GY">Guayana</option>
                                            <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                            <option value="Guinea" id="GN">Guinea</option>
                                            <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                            <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                            <option value="Haití" id="HT">Haití</option>
                                            <option value="Holanda" id="NL">Holanda</option>
                                            <option value="Honduras" id="HN">Honduras</option>
                                            <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                            <option value="Hungría" id="HU">Hungría</option>
                                            <option value="India" id="IN">India</option>
                                            <option value="Indonesia" id="ID">Indonesia</option>
                                            <option value="Irak" id="IQ">Irak</option>
                                            <option value="Irán" id="IR">Irán</option>
                                            <option value="Irlanda" id="IE">Irlanda</option>
                                            <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                            <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                            <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                            <option value="Islandia" id="IS">Islandia</option>
                                            <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                            <option value="Islas Cook" id="CK">Islas Cook</option>
                                            <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                            <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                            <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                            <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                            <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                            <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                            <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                            <option value="Islas Palau" id="PW">Islas Palau</option>
                                            <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                            <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                            <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                            <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                            <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                            <option value="Israel" id="IL">Israel</option>
                                            <option value="Italia" id="IT">Italia</option>
                                            <option value="Jamaica" id="JM">Jamaica</option>
                                            <option value="Japón" id="JP">Japón</option>
                                            <option value="Jordania" id="JO">Jordania</option>
                                            <option value="Kazajistán" id="KZ">Kazajistán</option>
                                            <option value="Kenia" id="KE">Kenia</option>
                                            <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                            <option value="Kiribati" id="KI">Kiribati</option>
                                            <option value="Kuwait" id="KW">Kuwait</option>
                                            <option value="Laos" id="LA">Laos</option>
                                            <option value="Lesoto" id="LS">Lesoto</option>
                                            <option value="Letonia" id="LV">Letonia</option>
                                            <option value="Líbano" id="LB">Líbano</option>
                                            <option value="Liberia" id="LR">Liberia</option>
                                            <option value="Libia" id="LY">Libia</option>
                                            <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                            <option value="Lituania" id="LT">Lituania</option>
                                            <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                            <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                            <option value="Madagascar" id="MG">Madagascar</option>
                                            <option value="Malasia" id="MY">Malasia</option>
                                            <option value="Malawi" id="MW">Malawi</option>
                                            <option value="Maldivas" id="MV">Maldivas</option>
                                            <option value="Malí" id="ML">Malí</option>
                                            <option value="Malta" id="MT">Malta</option>
                                            <option value="Marruecos" id="MA">Marruecos</option>
                                            <option value="Martinica" id="MQ">Martinica</option>
                                            <option value="Mauricio" id="MU">Mauricio</option>
                                            <option value="Mauritania" id="MR">Mauritania</option>
                                            <option value="Mayotte" id="YT">Mayotte</option>
                                            <option value="México" id="MX">México</option>
                                            <option value="Micronesia" id="FM">Micronesia</option>
                                            <option value="Moldavia" id="MD">Moldavia</option>
                                            <option value="Mónaco" id="MC">Mónaco</option>
                                            <option value="Mongolia" id="MN">Mongolia</option>
                                            <option value="Montserrat" id="MS">Montserrat</option>
                                            <option value="Mozambique" id="MZ">Mozambique</option>
                                            <option value="Namibia" id="NA">Namibia</option>
                                            <option value="Nauru" id="NR">Nauru</option>
                                            <option value="Nepal" id="NP">Nepal</option>
                                            <option value="Nicaragua" id="NI">Nicaragua</option>
                                            <option value="Níger" id="NE">Níger</option>
                                            <option value="Nigeria" id="NG">Nigeria</option>
                                            <option value="Niue" id="NU">Niue</option>
                                            <option value="Norfolk" id="NF">Norfolk</option>
                                            <option value="Noruega" id="NO">Noruega</option>
                                            <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                            <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                            <option value="Omán" id="OM">Omán</option>
                                            <option value="Panamá" id="PA">Panamá</option>
                                            <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                            <option value="Paquistán" id="PK">Paquistán</option>
                                            <option value="Paraguay" id="PY">Paraguay</option>
                                            <option value="Perú" id="PE">Perú</option>
                                            <option value="Pitcairn" id="PN">Pitcairn</option>
                                            <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                            <option value="Polonia" id="PL">Polonia</option>
                                            <option value="Portugal" id="PT">Portugal</option>
                                            <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                            <option value="Qatar" id="QA">Qatar</option>
                                            <option value="Reino Unido" id="UK">Reino Unido</option>
                                            <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                            <option value="República Checa" id="CZ">República Checa</option>
                                            <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                            <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                            <option value="República Dominicana" id="DO">República Dominicana</option>
                                            <option value="Reunión" id="RE">Reunión</option>
                                            <option value="Ruanda" id="RW">Ruanda</option>
                                            <option value="Rumania" id="RO">Rumania</option>
                                            <option value="Rusia" id="RU">Rusia</option>
                                            <option value="Samoa" id="WS">Samoa</option>
                                            <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                            <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                            <option value="San Marino" id="SM">San Marino</option>
                                            <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                            <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                            <option value="Santa Helena" id="SH">Santa Helena</option>
                                            <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                            <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                            <option value="Senegal" id="SN">Senegal</option>
                                            <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                            <option value="Sychelles" id="SC">Seychelles</option>
                                            <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                            <option value="Singapur" id="SG">Singapur</option>
                                            <option value="Siria" id="SY">Siria</option>
                                            <option value="Somalia" id="SO">Somalia</option>
                                            <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                            <option value="Suazilandia" id="SZ">Suazilandia</option>
                                            <option value="Sudán" id="SD">Sudán</option>
                                            <option value="Suecia" id="SE">Suecia</option>
                                            <option value="Suiza" id="CH">Suiza</option>
                                            <option value="Surinam" id="SR">Surinam</option>
                                            <option value="Svalbard" id="SJ">Svalbard</option>
                                            <option value="Tailandia" id="TH">Tailandia</option>
                                            <option value="Taiwán" id="TW">Taiwán</option>
                                            <option value="Tanzania" id="TZ">Tanzania</option>
                                            <option value="Tayikistán" id="TJ">Tayikistán</option>
                                            <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                            <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                            <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                            <option value="Togo" id="TG">Togo</option>
                                            <option value="Tonga" id="TO">Tonga</option>
                                            <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                            <option value="Túnez" id="TN">Túnez</option>
                                            <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                            <option value="Turquía" id="TR">Turquía</option>
                                            <option value="Tuvalu" id="TV">Tuvalu</option>
                                            <option value="Ucrania" id="UA">Ucrania</option>
                                            <option value="Uganda" id="UG">Uganda</option>
                                            <option value="Uruguay" id="UY">Uruguay</option>
                                            <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                            <option value="Vanuatu" id="VU">Vanuatu</option>
                                            <option value="Venezuela" id="VE">Venezuela</option>
                                            <option value="Vietnam" id="VN">Vietnam</option>
                                            <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                            <option value="Yemen" id="YE">Yemen</option>
                                            <option value="Zambia" id="ZM">Zambia</option>
                                            <option value="Zimbabue" id="ZW">Zimbabue</option>

                                </select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label1">
								Comentarios
							</label>
                            <div class="form-input2">
                                <textarea rows="2" cols="8"  id="textarea" name="textarea"></textarea>

                            </div>
                        </li>
                    </ul>

                    <!-- Capcha--->
                    <div>
                        <label>Captcha</label>
                        <span id="captcha-info" class="info"></span><br/>
                        <input type="text" name="captcha" id="captcha" class="demoInputBox"  equired><br>
                    </div>
                    <div>
                        <img id="captcha_code" src="captcha_code.php" />
                        <button name="submit" class="BotonCambiar" onClick="refreshCaptcha();">Cambiar Captcha</button>
                    </div>
                    <input type="submit" id="enviar" value="Enviar">
                </form>
            </div>
        </div>
        </div>
        <div class="copyright">
            <p>© Programacion Web</p>
        </div>

      </div>
</body>

</html>