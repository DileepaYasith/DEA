<html>
   <head>
      <title>View Student Records</title>
   </head>

   <body>

      <table border = "1">
         <tr>

            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Password</td>
            <td>Account Status</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->Name }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->Address }}</td>
            <td>{{ $user->Password }}</td>
            <td>{{ $user->Account_status }}</td>
            <td><a href = '/{{ $user->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>
