<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location: ../../../../login.php');
    exit();
 
}
 
?>

<div class="container">
        <main>

            <div class="main_all">
                <div class="wrapper_main">
                    <div class="workers">
                        <div class="workers_tekst">
                            <h2>Workers & Co-Workers</h2>
                            <p>Planner</p>
                        </div>
                    </div>
                </div>

                <div class="all_button">
                    <div class="worker_button"><a href="*">Worker</a></div>
                    <div class="admin_button"><a href="*">Admin</a></div>
                </div>

                <div class="lists">

                    <div class="todo">
                        <h1>TO-DO</h1>
                        <H2>LIST THE PERSON</H2>
                        <div class="p">
                            <p><a href="meldingen/index.php">eerste gebruiker</a></p>
                            <p><a href="meldingen2/index.php">tweede gebruiker</a></p>
                            <p><a href="meldingen3/index.php">derde gebruiker</a></p>
                            <p><a href="meldingen4/index.php">vierde gebruiker</a></p>
                            <p><a href="meldingen5/index.php">vijfde gebruiker</a></p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                        </div>
                        <div class="buttons">
                            <button type="button">ADD</button>
                            <button type="button">DELETE</button>
                            <button type="button">CHANGE</button>

                        </div>



                    </div>

                    <div class="doing">

                        <h1>DOING</h1>
                        <H2>LIST THE PERSON</H2>
                        <div class="p">
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                        </div>
                        <div class="buttons">
                            <button type="button">ADD</button>
                            <a href="#"></a>
                            <button type="button">DELETE</button>
                            <button type="button">CHANGE</button>
                        </div>

                    </div>

                    <div class="done">
                        <h1>DONE</h1>
                        <H2>LIST THE PERSON</H2>
                        <div class="p">
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                            <p>lorem</p>
                        </div>
                        <div class="buttons">
                            <button type="button">ADD</button>
                            <a href="#"></a>
                            <button type="button">DELETE</button>
                            <button type="button">CHANGE</button>
                        </div>

                    </div>

                </div>
                


            </div>

        </main>


 </div>