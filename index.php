<?php

    echo "Seja bem vindo(a) ao Smart-PHP";

    require_once "system/Ambiente.php";

    $ambiente = new Ambiente();

    $ambiente->load();