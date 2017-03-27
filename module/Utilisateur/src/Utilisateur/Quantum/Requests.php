<?php
namespace Utilisateur\Quantum;

class Requests {
    public static function vars($request, $type, $key, $sanitize = true)
     {
          switch($request)
          {
               case 'get' :
                    $var = (isset($_GET[$key])) ? $_GET[$key] : NULL;
                    break;
               case 'post' :
                    $var = (isset($_POST[$key])) ? $_POST[$key] : NULL;
                    break;
               case 'cookie' :
                    $var = (isset($_COOKIE[$key])) ? $_COOKIE[$key] : NULL;
                    break;
               case 'session' :
                    $var = (isset($_SESSION[$key])) ? $_SESSION[$key] : NULL;
                    break;
               case 'var' :
                    $var = $key;
                    break;
               default :
                    trigger_error('Type de requête invalide "' . $request . '", request::vars()');
          }
          return ($sanitize) ? self::filter($var, $type) : $var;
     }  
    
    public static function filter($var, $type)
     {
          if (!is_scalar($var)) return null;
          if(!empty($var))
          {
               switch ($type)
               {
                    case 'string' :
                         return (string) filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
                         break;
                    case 'alnum' :
                         return (string) preg_replace( '/\W+/', '', $var);
                         break;
                    case 'file' :
                         return (string) preg_replace( '/[^a-zA-Z0-9\_\.\-]/', '', $var);
                         break;
                    case 'int' :
                         return (int) filter_var($var, FILTER_SANITIZE_NUMBER_INT);
                         break;
                    case 'float' :
                         return (float) filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT);
                         break;
                    case 'numeric' :
                         return (is_numeric($var)) ? $var : filter_var($var, FILTER_SANITIZE_NUMBER_INT);
                         break;
                    case 'email' :
                         return (string) filter_var($var, FILTER_SANITIZE_EMAIL);
                         break;
                    case 'url' :
                         return (string) Tools::fullUrlEncode(filter_var($var, FILTER_SANITIZE_URL));
                         break;
                    case 'bool' :
                         return (bool) (!empty($var) and ($var != false or $var > 0)) ? true : false;
                         break;
                    case 'raw' :
                         return $var;
                         break;
                    default :
                         throw new \Exception('Type de variable invalide "' . $type . '", request::vars()');
               }
          }
          else
          {
               switch ($type)
               {
                    case 'string' :
                    case 'email' :
                    case 'album' :
                    case 'url' :
                         return (string) '';
                         break;
                    case 'int' :
                    case 'numeric' :
                         return (int) 0;
                         break;
                    case 'float' :
                         return (float) 0;
                         break;
                    case 'bool' :
                         return (bool) false;
                         break;
                    default :
                         return NULL;
               }
          }
     }
}