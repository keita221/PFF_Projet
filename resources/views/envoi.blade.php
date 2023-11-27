<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('scss/main.css')}}">
    <title>Document</title>
    <style>
          .par {
            color: #F4F3F3;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 160%;
            flex-shrink: 0;
            padding-bottom: 20px;
          }
        .tit {
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-size: 30px;
            font-weight: 400;
        }
        .flex {
            display: flex;
            gap: 20px;
          }
          .btn0 {
            display: flex;
            width: 178.513px;
            height: 40.527px;
            padding: 14px 17px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            gap: 10px;
            flex-shrink: 0;
            padding-bottom: 20px;
            background-color: orange;
          } 
          .bttn {
            border-radius: 8px;
            border: 1px solid orange;
            padding: 0.6em 1.2em;
            font-size: 1em;
            font-weight: 500;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            background-color: orange;
            cursor: pointer;
            transition: border-color 0.25s;
            color: white;
            text-decoration: none;
          }
          
          
          .pid {
            font-size: 20px;
          }
          strong {
            color:orange;
          }
        .box-container {
            display:flex;
            justify-content: center; 
            gap: 30px;  
        }
        .box {
            width:30rem;
            text-align: center;
            padding:0 1rem; 
            box-shadow: 0 .1rem .1rem rgba(0,0,0,1);
        }
        .box i {
            font-size:6rem; 
            margin-top:-3rem; 
            color:var(--red);
            opacity: .4;
        }
        .box p {
            font-size:1.3rem; 
            color:#666;
            padding:2rem 0;
        }
        .box .user {
            display: flex;
            align-items: center;
            text-align: left;
            padding:.5rem 0;
            border-top:.1rem solid #3334;

        }
        .box .user img {
            width:4rem; 
            height:4rem; 
            border-radius: 50%;
            object-fit: cover;
            margin:.8rem 1rem; 
        }
        .box .user .info h3 {
            font-size:1.4rem; 
            color:black;
        }
        .box .user .info span {
            font-size:1rem; 
            color: red;
        }
        .btn1 {
            border: 1px solid orange;
            padding: 0.6em 1.2em;
            font-size: 1em;
            font-weight: 500;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            background-color: orange;
            cursor: pointer;
            transition: border-color 0.25s;
            color: white;
            text-decoration: none;
          }
          .boxe {
            background-color: white;
            box-shadow: 0 .1rem .1rem rgba(0,0,0,1);
            padding: 16px;
            width: 22%;
          }
          .ville {
            padding-top: 8px;
            font-size: 25px
          }
          .para {
            color: gray;
          }
          .bili {
            display: flex;
            justify-content: center;
            gap: 30px
          }
          .par {
            color: #F4F3F3;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 160%;
            flex-shrink: 0;
            padding-bottom: 20px;
          }
    </style>
</head>
<body>
    @extends('layouts.header')
        @section('content')
        <main>
        <section class=" sections section-loading">
            <div class="container">
                        <div class="flexs">
                            <div>
                                <h1 id='titre'>Avec <strong>SEN VOYAGE</strong> sur un click simple seulement effectuer votre demande d'envoi de colis avec 100% d'assurence</h1>
                                <p class="par">Avec sen voyage vous pouvez egalement effectuer un demamde d'envoi de colis ou encore une demande de location de bus, mini-bus. SEN VOYAGE, une agence de transport de haut niveau</p>
                                <a href="{{route('contact.create')}}" class="btn0">Nous Contactez</a>       
                            </div>
                            <div>
                                <div class='form'>
                                        <form action="get" action="#">
                                            @method('get')
                                                <h2 class="tit">Rechercher une Ligne</h2>
                                                <div class="flex">
                                                    <div class="flex">
                                                        <input type="radio" name="" id="">
                                                        <label for="">Aller</label>
                                                    </div>
                                                    <div class="flex">
                                                        <input type="radio" name="" id="">
                                                        <label for="">Aller et Retour</label>
                                                    </div>
                                                </div>
                                                    <div class='item-er'>
                                                                <div class="long">
                                                                    <label class="lab">Depart</label>
                                                                    <select name="" class='nana' id='nana'>
                                                                        <option value="">iwol</option>
                                                                        <option value="">dakar</option>
                                                                        <option value="">kedougou</option>
                                                                        <option value="">thies</option>
                                                                        <option value="">matam</option>
                                                                        <option value="">mbour</option>
                                                                        <option value="">fatick</option>
                                                                        <option value="">tamba</option>
                                                                        <option value="">kaolack</option>
                                                                        <option value="">saint-louis</option>
                                                                        <option value="">diourbel</option>
                                                                        <option value="">louga</option>
                                                                    </select>
                                                                </div>
                                                                <div class="long">
                                                                    <label class="lab">Arrivee</label>
                                                                    <select name="" class='nana'id='nana'>
                                                                        <option value="">dakar</option>
                                                                        <option value="">kedougou</option>
                                                                        <option value="">thies</option>
                                                                        <option value="">matam</option>
                                                                        <option value="">mbour</option>
                                                                        <option value="">fatick</option>
                                                                        <option value="">tamba</option>
                                                                        <option value="">kaolack</option>
                                                                        <option value="">saint-louis</option>
                                                                        <option value="">diourbel</option>
                                                                        <option value="">louga</option>
                                                                    </select>
                                                                </div>
                                                                <div class="long">
                                                                    <label class="lab">Date depart</label>
                                                                    <input type="date" class='nana' />
                                                                </div>
                                                                <div class="style">
                                                                    <a href="" class='bttn'>Confirm</a>
                                                                </div>
                                                                <br>
                                                            </div> 
                                                        </form>
                                                    </div>
                                            </div>
                                        </form>  
                                </div>
                            </div>  
                        </div>           
                </div>
        </section>
            <section class="section section-white">
                    <div class="container">
                        <h3 class="section-title2">Choissisez une ligne de transport</h3>

                        <div class="bili">
                            @foreach($reft as $ligne)
                                <div class="boxe">
                                    <div>
                                        <img src="{{ asset('storage/'.$ligne->image) }}" width="250px" height="180px">
                                    </div>
                                    <div>
                                        <h5 class="ville">{{$ligne->numero}}</h5>
                                        <p class="para">{{$ligne->lieu}}</p>
                                        <a href="{{route('trajets.show',$ligne->id)}}" class="btn1">Voir Plus</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </section>

    		<section class="section section-second">
    			<div class="container">
    				<h3 class="section-title2">Nous faisons</h3>

                        <div class='clientele'>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de documents</h3>
                            </div>
                                <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de marchandises</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de materiel de construction</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de cultures</h3>
                            </div>
                        </div>
    			</div>
    		</section>

    		<section class="section review section-white">
    			<div class="container">
    				<h3 class="section-title2">Ce qu'ils pensent de nous</h3>

                    <div class="box-container">

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-1.png')}}" alt="">
                                <div class="info">
                                    <h3>Gerald charo KEITA</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-2.png')}}" alt="">
                                <div class="info">
                                    <h3>Arame THIAM</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-3.png')}}" alt="">
                                <div class="info">
                                    <h3>Oumoul khairy SALL</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
                        </div>

                    </div>

    			</div>
    		</section>
        </main>
        <footer>
            <div class="container">
            <div class='footer-item'>
                <div>
                <div>
                    <img src="{{asset('image/logo.png')}}" width='100px' height='60px'>
                </div>
                <p class='item-pied'>Nous une entreprise specialisee sur la gestion des transport logitique.</p>
                </div>
                <div>
                <h4 class='item-h4'>Informations</h4>
                <p class='item-pied'>kdg,tripano face LT RN</p>
                <p class='item-pied'>charodesignestudio@gmail.com</p>
                <p class='item-pied'>+221 77 737 59 11</p>
                </div>
                <div>
                <div class='item-p'>
                    <p class='ronded'><a href="" class='rond'>FB</a></p>
                    <p class='ronded'><a href="" class='rond'>IN</a></p>
                    <p class='ronded'><a href="" class='rond'>LN</a></p>
                    <p class='ronded'><a href="" class='rond'>YB</a></p>
                </div>
                <p class='item-pied'>Nous faisons des reservation en ligne, loaction de bus et demande d'envoi de colis.</p>
                </div>
                <div>
                <h4 class='item-h4'>Nous Joindre par Newsletter</h4>
                <div>
                    <label htmlFor="" class='item-pied'>Votre adresse email</label>
                    
                    <input type="text" class='inpute' placeholder='ecrire ici...'/>
                </div><br />
                    <input type="submit" name="" id="env" class='button'/>
                </div>
            </div>
            </div>
        </footer>
        <div class="pied-footer">
             <div class="container">
                <div class="foot">
                    <center><p class="pid">Created by | <strong>GERALD CHARO KEITA</strong> | @2023</p></center>
                </div>
            </div>
        </div>
        @endsection
</body>
</html>