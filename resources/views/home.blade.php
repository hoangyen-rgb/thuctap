<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>

<body>
    {{-- Search --}}
    {{-- Banner --}}
    {{-- Show Product --}}
    <h2>Product New</h2>
    <table border="1">
        <tr>

            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Price Old</th>
            <th>Sale</th>
            <th>Brand</th>
            <th>Category</th>
        </tr>
        @foreach ($newProduct as $prod)
            <tr>
                <td>
                    <img src="{{ asset('site/image/' . $prod->gallery->first()->thumbnail) }}"
                        style="width: 100%; height: 50px;" alt="">
                </td>
                <td>{{ $prod->name }}</td>
                <td>{{ number_format($prod->price, 2) }}đ</td>
                <td>
                    @if ($prod->discount > 0)
                        {{ number_format(round(($prod->price * 100) / (100 - $prod->discount)), 2) }}đ
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $prod->discount }}%</td>
                <td>{{ $prod->brand->name }}</td>
                <td>{{ $prod->category->name }}</td>
            </tr>
        @endforeach
    </table>
    {{-- Show Product topSellers --}}
    <h2>Product topSellers</h2>
    <table border="1">
        <tr>

            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Price Old</th>
            <th>Sale</th>
            <th>Brand</th>
            <th>Category</th>
        </tr>
        @foreach ($ProductTopSeller as $prod)
            <tr>
                <td>
                    <img src="{{ asset('site/image/' . $prod->gallery->first()->thumbnail) }}"
                        style="width: 100%; height: 50px;" alt="">
                </td>
                <td>{{ $prod->name }}</td>
                <td>{{ number_format($prod->price, 2) }}đ</td>
                <td>
                    @if ($prod->discount > 0)
                        {{ number_format(round(($prod->price * 100) / (100 - $prod->discount)), 2) }}đ
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $prod->discount }}%</td>
                <td>{{ $prod->brand->name }}</td>
                <td>{{ $prod->category->name }}</td>
            </tr>
        @endforeach
    </table>
    {{-- Show Ambassadors --}}
    <h2>Ambassadors</h2>
    <table border="1">
        <tr>

            <th>Image</th>
            <th>name</th>
            <th>facebook_url</th>
            <th>twitter_url</th>
            <th>youtube_url</th>
        </tr>
        @foreach ($Get5Ambassadors as $Ambass)
            <tr>
                <td>
                    <img src="{{ asset('site/image/' . $Ambass->image) }}" style="width: 100%; height: 50px;"
                        alt="">
                </td>
                <td>{{ $Ambass->name }}</td>
                <td>{{ $Ambass->facebook_url }}</td>
                <td>{{ $Ambass->twitter_url }}</td>
                <td>{{ $Ambass->youtube_url }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
