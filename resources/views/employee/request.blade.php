<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Leave</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-2xl">

        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-8">
            Request Leave
        </h1>

        <form action="" method="POST" class="space-y-5">
            @csrf

            <!-- Employee Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Employee Name
                </label>
                <input type="text"
                    placeholder="Enter employee name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Leave Type -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Leave Type
                </label>
                <select
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option>Select Leave Type</option>
                    <option>Sick Leave</option>
                    <option>Casual Leave</option>
                    <option>Annual Leave</option>
                </select>
            </div>

            <!-- Start Date -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Start Date
                </label>
                <input type="date"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- End Date -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    End Date
                </label>
                <input type="date"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Reason -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Reason
                </label>
                <textarea rows="4"
                    placeholder="Write reason for leave"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
                Submit Leave Request
            </button>
        </form>

    </div>

</body>
</html>