<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$newsubject}}</title>
</head>
<body>
    <h1>{{$newsubject}}</h1>
    <h3>{{$newmessage}}</h3>

    <table border='1'>
      <thead>
        <th>Title</th>
        <th>Body</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Age</th>
      </thead>
      <tbody>
        <tr>
            <td>{{$newdetails['title']}}</td>
            <td>{{$newdetails['body']}}</td>
            <td>{{$newdetails['name']}}</td>
            <td>{{$newdetails['mobile']}}</td>
            <td>{{$newdetails['gender']}}</td>
            <td>{{$newdetails['age']}}</td>
        </tr>
      </tbody>
    </table>
</body>
</html>