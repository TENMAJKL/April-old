<!DOCTYPE html>
<html lang="en">
<head>
    <!--
              .+.
             .***.
            :*****:
           -*******-
          =***###***=
         +***#####***+
        +**#########**+
      .**#############**.
     :*#################*:
    -*###################*-

    April
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- BT Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>April</title>
</head>
<body class="bg-gray-900">
    <img src="static/april.svg" alt="" class="w-4/12 sm:w-2/12 xl:w-1/12 mx-auto my-5">
    
    <div class="text-center text-4xl text-white mb-10">Services</div>
    <div class="flex justify-center">
        <div class="xl:w-6/12 mx-5 w-11/12 flex justify-center flex-wrap">
        {% if (empty($services)): %}
            <div class="text-2xl text-white">No services found</div>
        {% endif %}
        {% foreach ($services as $service): %}
            <div class="bg-purple-700 p-3 m-2 lg:w-3/12 sm:w-4/12 w-11/12 shadow-2xl">
                <div class="flex justify-between items-center text-white">
                    {{ $service->name }}
                    <i class="bi bi-{{ $service->class }} text-2xl"></i>
                </div>
            </div>
        {% endforeach %}
        </div>
    </div>
</body>
</html>

