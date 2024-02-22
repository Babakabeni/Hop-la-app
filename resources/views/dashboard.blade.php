<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>


    <div class="first_bloc">
        <p id="first_para">Soins de médecine générale</p>
        <h1>Le nouvel hôpital</h1>
        <p id="second_para">Nous sommes les meilleurs médecins de la famille et de la santé</p>
        
    </div>

    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close-btn" onclick="closeAlert()">Fermer</button>
        </div>
        <script>
            function closeAlert() {
                document.querySelector('.alert').style.display = 'none';
            }
        </script>
    @endif
    <div class="second_bloc">
        <p>L'hôpital en qui vous avez <br>
            confiance pour soigner ceux <br>
            que vous aimez
        </p>
        <div class="bloc_bouton">
            <button type="button" id="explorer"><a href="fonctionnalite.html">Explorer les fonctionnalités</a></button>
            <button type="button" id="contact"><a href="#contacts">Nos contacts</a></button>
        </div>
    </div>


    <div class="solution">
        <div class="bloc_infos">
            <p id="first_para">Laboratoire</p>
            <h1>Solutions médicales</h1>
            <p id="second_para">nous vous accompagnos à chaque etapes : <br> gestion
               de tournée et de projet, conception d'événement.
               <br>Salles mobile pour laboratoire, <br> salles de don de
                sang, clinique médicale, salle dexposition. 
            </p>
            <p id="third_para">Image de <a href="">Pirate</a></p>
            <div class="hr"><hr></div>
            <div class="lorem">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="bloc_img">
            <img src="/images/solution medicale.jpg" alt="" height="320px" width="350px">
        </div>
    </div>


    <div class="comment_ça_marche">

        <div class="bloc_notification">
            <div class="first bloc">
                <h1>850</h1>
                <p>Client heureux</p>
            </div>
            <div class="second bloc">
                <h1>32</h1>
                <p>Médecins du monde</p>
            </div>
            <div class="third bloc">
                <h1>1K</h1>
                <p>Satisfaction</p>
            </div>
            <div class="fourth bloc">
                <h1>230</h1>
                <p>Lits médicaux</p>
            </div>
        </div>
        <div class="bloc_titre">
            <p>Processus de travail</p>
            <h1>Comment ça marche ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="img">
            <div class="first_img image">
                <div class="firstS case">
                    <img src="/images/pub.jpg" alt="" width="150px" height="180">
                    <h4>Rendez-vous</h4>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="secondS case">
                    <img src="/images/pub.jpg" alt="" width="150px" height="200">
                    <h4>Satisfaction</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="second_img image">
                <div class="thirds case">
                    <img src="/images/pub.jpg" alt="" width="150px" height="200">
                    <h4>Client heureux</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="fourths case">
                    <img src="/images/pub.jpg" alt="" width="150px" height="200">
                    <h4>Médecins du monde</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <div class="grand_img">
            <img src="/images/pub.jpg" alt="" width="400px" height="470px">
        </div>
    </div>


    <div class="fonctionnalite">

        <div class="first_fonct fonct">

            <div class="bloc1_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="200" height="160">
                <H4>Analyse de laboratoire</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

            <div class="bloc2_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="200" height="160">
                <H4>Coeur de chirurgie</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

            <div class="bloc3_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="200" height="160">
                <H4>Clinique pédiatrique</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

        </div>


        <div class="second_fonct fonct">

            <div class="bloc1_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="200" height="160">
                <H4>Clinique de neurologie</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

            <div class="bloc2_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="200" height="160">
                <H4>Clinique de pathologie</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

            <div class="bloc3_fonct bloc">
                <img src="/images/fonct.jpg" alt="" width="180" height="160">
                <H4>Paralysie des tablettes</H4>
                <p>Lorem ipsum dolor sit amet</p>
                <input type="button" value="Explorer">
            </div>

        </div>


        <div class="gros_img">

            <div class="left_bloc">
                <img src="/images/images (1).jpeg" alt="" width="400" height="500">
                <h4>images de freepik</h4>
                <input type="button" value="Explorer">
            </div>


            <div class="right_bloc">
                <p id="first_para">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>

                <div class="notes">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                    </ul>
                </div>
                <div class="bottom_para">
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>

    </div>


    <div class="notre_equipe">
        <h1>Notre équipe</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p id="pirate">Image de pirate</p>

        <div class="container">


            <div class="first_container cont">

                <div class="un sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205">
                    <p id="first_para">Dr Bob Brown</p>
                    <h5>DENTISTE GENERAL</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">
                        
                    </div>
                </div>
                <div class="deux sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205">
                    <p id="first_para">Dr Mary Smith</p>
                    <h5>CHIRURGIENNE GENERALE</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">

                    </div>
                </div>
                <div class="trois sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205"">
                    <p id="first_para">Dr Nick Dark</p>
                    <h5>ORTHODONTISTE</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">

                    </div>
                </div>

            </div>

            <div class="second_container cont">

                <div class="un sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205">
                    <p id="first_para">Dr Emery Kamanga</p>
                    <h5>PSYCHOLOGUE GENERAL</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">
                        
                    </div>
                </div>
                <div class="deux sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205">
                    <p id="first_para">Dr Ben Dev</p>
                    <h5>PEDIATRE GENERAL</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">

                    </div>
                </div>
                <div class="trois sous_coont">
                    <img src="/images/fonct.jpg" alt="" width="260" height="205">
                    <p id="first_para">Dr Lucrece Dark</p>
                    <h5>GYNECOLOGUE GENERAL</h5>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    <div class="icon">

                    </div>
                </div>
                
            </div>


        </div>
    </div>


    <div class="contact" id="contacts">
        <form action="">
            <div class="lefts cont">
                <div class="left">
                    <p id="first_para"><span class="fas fa-phone-alt"></span>APPELEZ-NOUS</p>
                    <P id="second_para">+ (243) 827681521, +(243) 975928137</P>
                </div>
                <div class="left">
                    <p id="first_para"><span class="fas fa-map-marker-alt"></span>EMPLACEMENT</p>
                    <P id="second_para">121 Luete, Kimbangu, Kinshasa-Masina</P>
                </div>
                <div class="left">
                    <p id="first_para"><span class="fas fa-clock"></span>HEURES DE TRAVAIL</p>
                    <P id="second_para">lorem ipsum lorem</P>
                </div>
                <div class="left last">
                    <p id="follow">SUIVEZ-NOUS</p>
                    <div class="social-media">
                        <p><i class="fab fa-whatsapp"></i></p>
                        <p><i class="fab fa-youtube"></i></p>
                        <p><i class="fab fa-facebook-f"></i></p>
                    </div>
                </div>
            </div>
    
            <div class="right cont">
                <h1>NOUS CONTACTER</h1>
                <input type="text" placeholder="Entrer votre nom">
                <input type="email" placeholder="Entrer votre adresse email">
                <textarea placeholder="Ecrivez-nous un message..."></textarea>
                <input type="submit" value="SOUMETTRE">
            </div>
        </form>
    </div>


    <footer>
        <div class="un foot">
            <p id="follow">SUIVEZ-NOUS</p>
            <div class="social-media">
                        <p><i class="fab fa-whatsapp"></i></p>
                        <p><i class="fab fa-youtube"></i></p>
                        <p><i class="fab fa-facebook-f"></i></p>
            </div>
        </div>
        <div class="deux foot">
            <p id="follow">lorem ipsum</p>
            <p>lorem ips</p>
            <p>lorem ipsum</p>
            <p>lorem ipsu</p>
            <p>lorem </p>
            <p>lorem i</p>
            <p>lorem ipsum</p>
        </div>
        <div class="trois foot">
            <p id="follow">Partnerships</p>
            <p>Partners</p>
            <p>Part lorem</p>
            <p>Partner</p>
            <p>lorem ipsum</p>
        </div>
        <div class="quatre foot">
            <p id="follow">Location</p>
            <p>Emery</p>
            <p>Location</p>
            <p>lorem ipsum</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
            <p>Location</p>
        </div>
        <div class="cinq foot">
            <button type="valeur">Commencer</button>
        </div>

    </footer>
</x-app-layout>
