<?php

/* @var $this yii\web\View */

$this->title = 'Ban the Fake News';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ban the Fake News!</h1>

        <p class="lead">En tiempos como el de #SismoMexico, es necesario deshacernos de las noticias falsas.</p> 
        <p class="lead">Reporta las mismas para tener un control sobre ellas y poder reportarlas a la comunidad.</p>

        <p><a class="btn btn-lg btn-primary" href="/report/index">Consultar Noticias Falsas</a></p>
    <?php if (Yii::$app->user->isGuest){ ?>
        <p><a class="btn btn-lg btn-success" href="/site/login">Reportar Noticia Falsa</a></p>
    <?php } else { ?>
        <p><a class="btn btn-lg btn-success" href="/report/create">Reportar Noticia Falsa</a></p>
    <?php } ?>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>¿Qué es una noticia falsa?</h2>

                <p>Una noticia falsa es aquella cuyo contenido y/o contexto es absolutamente falso, inverosímil o fuera de la realidad y pretende desprestigiar, desvirtuar o entorpecer las labores de rescate que hay durante #SismoMexico.</p>
                <p>Es necesario que las combatamos para poder agilizar las labores de rescate y podamos salvar más vidas.</p>
            </div>
            <div class="col-lg-6">
                <h2>¿No interrumpen la libertad de expresión?</h2>

                <p>No. De hecho el elaborar noticias falsas es sobrepasar la libertad de expresión e incluso puede extender aún más la tragedia.</p>

            </div>
        </div>

    </div>
</div>
