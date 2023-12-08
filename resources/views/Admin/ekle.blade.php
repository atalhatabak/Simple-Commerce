<!DOCTYPE html>
<html>
<head>
    <title>Kahve Ekle</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    @include('Admin.Incs.aside')

    <section>
        <form action="{{ route('admin.kahveekle') }}" method="post" enctype="multipart/form-data" class="ekleForm">
            @csrf
            <div style="width:50%; float:left;">
                <input type="file" name="photo" accept="image/*" id="imgInp"><br><br>
                <img id="blah" src="#" alt="your image" style="width:70%;" /><br>
            </div>
            <div style="width:50%; float:left;">
                <input type="text" name="brand" placeholder="Marka" required>
                <input type="text" name="model" placeholder="Model" required>
                <input type="number" name="price" placeholder="Fiyat" required>
                <input type="text" name="type" placeholder="Tür" required>
                <input type="text" name="coffeebean" placeholder="Kahve Çekirdeği" required>
            </div>
            <input style="background:white; width:50%; margin-left:25%; color:black; font-size:25px; " type="submit" placeholder="Ekle">
        </form>
        <hr style="width:100%; ">
        <br>
            <table class="urunListele">
                <thead>
                    <tr>
                        <th>Yol</th>
                        <th>Kahve Markası</th>
                        <th>Kahve Modeli</th>
                        <th>Kahve Fiyatı</th>
                        <th>Kahve Türü</th>
                        <th>Kahve Çekirdeği</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coffees as $coffee)
                        <tr>
                        <td><img class="urunPhoto" src="/storage/{{ $coffee->photo }}"/></td>
                        <td><a>{{ $coffee->brand }}</a></td>
                        <td><a>{{ $coffee->model }}</a></td>
                        <td><a>{{ $coffee->price }}</a></td>
                        <td><a>{{ $coffee->type }}</a></td>
                        <td><a>{{ $coffee->coffeebean }}</a></td>
                        <td><a href="#" onclick="confirmR({{ $coffee->id }})">Sil</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
    </section>
</body>

<script>
    var itemlink = document.getElementById("ekle");
    itemlink.className = "itemThis";
    function confirmR(x) {
        var confirmation = confirm("Emin misiniz?");
        if (confirmation) {
            window.location.href = "/admin/sil/"+x; 
        } else {
            alert("İşlem iptal edildi.");
        }
    }

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>

</html> 
