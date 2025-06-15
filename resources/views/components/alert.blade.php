@php
$class='';

 switch($type)
 {
    case 'success':
    $class="alert alert-success";
    break;

    case 'warning':
     $class="alert alert-warning";
    break;

    case 'error':
    $class="alert alert-danger";
    break;
    
    case 'info':
       $class="alert alert-info";        
    break;

    default :
       $class="alert alert-primary";
    break;

}   
@endphp

    <div class="{{$class}}" role="alert">
     <h1> {{$titulo}} </h1>
     <span> {{$contenido}} </span>
    </div>