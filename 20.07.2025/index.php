<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nasif Abdullah</title>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-teal-700 via-teal-800 to-teal-900 text-white flex justify-center items-center min-h-screen">

<?php

$data = [
    "name" => "Nasif Abdullah",
    "title" => "Software Engineer",
    "age" => 30,
    "email" => "nasifabdullah@example.com",
    "phone" => "+8801234567890",
    "pet_name" => "Tommy",
    "hobbies" => "Coding, Travelling, Photography",
   
    ,
    "skills" => ["PHP", "JavaScript", "HTML", "CSS", "Laravel", "React"]
];
?>

<div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 max-w-md w-full shadow-xl hover:shadow-2xl hover:-translate-y-1 transition transform">
    <div class="text-center mb-6">
        <img src="<?php echo htmlspecialchars($data['image']); ?>" alt="Profile Picture"
             class="w-24 h-24 mx-auto rounded-full border-4 border-indigo-400 shadow-lg mb-3">
        <h1 class="text-4xl font-extrabold text-indigo-200">
            <?php echo htmlspecialchars($data['name']); ?>
        </h1>
        <p class="text-indigo-300 mt-1 italic">
            <?php echo htmlspecialchars($data['title']); ?>
        </p>
    </div>

    <div class="space-y-4">
        <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
            <p><span class="font-semibold text-indigo-200">Age:</span> <?php echo htmlspecialchars($data['age']); ?></p>
        </div>
        <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
            <p><span class="font-semibold text-indigo-200">Email:</span> <?php echo htmlspecialchars($data['email']); ?></p>
        </div>
        <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
            <p><span class="font-semibold text-indigo-200">Phone:</span> <?php echo htmlspecialchars($data['phone']); ?></p>
        </div>
        <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
            <p><span class="font-semibold text-indigo-200">Pet Name:</span> <?php echo htmlspecialchars($data['pet_name']); ?></p>
        </div>
        <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
            <p><span class="font-semibold text-indigo-200">Hobbies:</span> <?php echo htmlspecialchars($data['hobbies']); ?></p>
        </div>
        <div>
            <div class="bg-indigo-900/50 p-4 rounded-lg shadow">
                <p>
                    <span class="font-semibold text-indigo-200">Skills:</span>
                    <?php echo implode(', ', array_map('htmlspecialchars', $data['skills'])); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="mt-6 grid justify-center">
        <button class="bg-teal-500 hover:bg-white hover:text-teal-600 hover:border-2 hover:border-teal-600 px-4 py-2 rounded-lg shadow text-white font-semibold transition">
            Contact Me
        </button>
    </div>
</div>

</body>
</html>