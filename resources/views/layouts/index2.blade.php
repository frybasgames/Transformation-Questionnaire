<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />

    <link rel="stylesheet" href="{{asset("style.css")}}" />

    <title>Lagaranta - Conversiebot</title>
</head>
<body>
<div class="logo">
    <img src="{{asset("img/lagaranta-sm-white.png")}}" alt="Lagaranta" loading="lazy"/>
</div>
@yield("content")
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
        //
    });
</script>

<script>
    const submitLike = (likedProduct, step) => {
        const current_step = parseInt(step);
        let nextStep;
        if(current_step <= 7) {
            nextStep = parseInt(step) + 1;
        } else {
            nextStep = 1;
        }
        fetch("{{route("conbot.next")}}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": "{{csrf_token()}}"
            },
            body: JSON.stringify({
                likedProduct: likedProduct,
                step: step
            })
        })
            .then((data) => {
                window.location.href = "{{route('conbot.step')}}/" + nextStep;
            })
            .catch((error) => {
                console.log(error);
            })
    }
</script>
</body>
</html>
