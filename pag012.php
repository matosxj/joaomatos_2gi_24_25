<?php
function dia_atual()
{ 
    $hoje = getdate();
    switch($hoje["wday"])
    {
        case 0:
            return "Domingo";
            break;
            case 1:
                return "Segunda-feira";
                break;
                case 2:
                    return "Terça feira";
                    break;
                    case 3:
                        return "Quarta feira";
                        break;
                        case 4:
                            return "Quinta feira";
                            break;
                            case 5:
                                return "Sexta feira";
                                break;
                                case 6:
                                    return "sabado";
                                  break;
                                }
                            }
                            $dia = dia_atual ();
                            echo "<h2> Hoje e $dia</h2>";