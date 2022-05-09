<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-reboot.min.css" integrity="sha512-ioOlrrQQ3fZN/A7N2rZVm6JXp/Lg7xtda9OaRKornjBcuTW/UqIhTlPyngcGQGrQTOhJgmSltKM4v3Ne03WPug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1> Paises de la region </h1>
    <table class="table table-striped"> 
       <thead>
           <tr>
             <th>
                 Paises
            </th>

            <th>
                 Capital
            </th>

            <th>
                 Moneda
            </th>
            
            <th>
                 Poblacion
            </th>
           </tr>


   </thead>
   
   <tbody>
       @foreach($paises as $pais =>$infopais)
         <tr> 

           <td>
             {{$pais}}
           </td>

            <td>
                 {{ $infopais["capital"]}}     
            </td>

            <td>
                 {{ $infopais["moneda"]}}     
            </td>           
            
            <td>
                 {{ $infopais["poblacion"]}}     
            </td>
         </tr>
       @endforeach
   </tbody>
   <tfoot></tfoot>



    </table>
</body>
</html>