<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tbody>
           <tr>
             <td>
               ID
             </td>
             <td>
              Category
             </td>
            </tr>
            @foreach($product_category as $pro_cat)
            <tr>
             <td>
                {{$pro_cat->id}}
             </td>
               <td>
                   <a href="{{route('category-detail', $pro_cat->id)}}">{{$pro_cat->category}}</a>
               </td>
            </tr>
         @endforeach
           </tbody>
    </table>
</body>
</html>
