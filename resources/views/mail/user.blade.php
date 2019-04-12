<!DOCTYPE html>
<html lang="es-Es">
  <head>
    <meta charset="utf-8">
  </head>
  <body style="font-family:sans-serif;">
    <h2>Registro de Usuario en GrupoPlus</h2>

    <table border="1" cellpadding="10">
      <thead>
        <tr>
          <th>Nombre de la Empresa::</th>
          <th>Teléfono Fijo:</th>
          <th>Persona de Contacto:</th>
          <th>Teléfono Celular:</th>
          <th>Email:</th>
          <th>Ciudad:</th>
          <th>Escuchó de Nosotros Por:</th>
          <th>RIF</th>
        </tr>
        </thead>
        <tbody>
          <td>{!!$companyName!!}</td>
          <td>{!!$telephoneNumber!!}</td>
          <td>{!!$name!!}</td>
          <td>{!!$cellphoneNumber!!}</td>
          <td>{!!$email!!}</td>
          <td>{!!$city!!}</td>
          <td>{!!$listen!!}</td>
          <td>{!!$rif!!}</td>
        </tbody>
    </table>

  </body>
</html>
