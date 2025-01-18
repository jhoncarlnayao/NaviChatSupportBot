<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script>
        window.onload = function () {
            axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        };
    </script>

</head>

<body class=" dark:bg-neutral-900">
    <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div
            class="flex flex-row items-center  bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
            <img src="{{ asset('img/botpfp.jpg') }}" alt="" class="w-12 h-12 rounded-full mr-7">
            <h3 class="text-xl font-bold text-gray-800 dark:text-white">
                Navi Chat Support Bot
            </h3>
            <div class="flex ml-auto cursor-pointer self-center" id="info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-info">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                </svg>
            </div>
        </div>

        <!-- This is where message sends -->
        <div id="message-container">

        </div>

        <div class="p-4 md:p-5">
            <!-- Textarea -->
            <div class="relative">
                <textarea id="hs-textarea-ex-2"
                    class="p-4 pb-12 block w-full bg-gray-100 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Ask me anything..." data-hs-textarea-auto-height=""></textarea>

                <!-- Toolbar -->
                <div class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-gray-100 dark:bg-neutral-800">
                    <div class="flex justify-between items-center">
                        <!-- Button Group -->
                        <div class="flex items-center">
                            <!-- Mic Button -->
                            <button type="button"
                                class="inline-flex shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 hover:bg-gray-100 focus:z-10 focus:outline-none focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                    <line x1="9" x2="15" y1="15" y2="9"></line>
                                </svg>
                            </button>
                            <!-- End Mic Button -->

                            <!-- Attach Button -->
                            <button type="button"
                                class="inline-flex shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 hover:bg-gray-100 focus:z-10 focus:outline-none focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                            </button>
                            <!-- End Attach Button -->
                        </div>
                        <!-- End Button Group -->

                        <!-- Button Group -->
                        <div class="flex items-center gap-x-1">
                            <!-- Mic Button -->
                            <button type="button" id="send-message"
                                class="inline-flex shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 hover:bg-gray-100 focus:z-10 focus:outline-none focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                    <line x1="12" x2="12" y1="19" y2="22"></line>
                                </svg>
                            </button>
                            <!-- End Mic Button -->

                            <!-- Send Button -->
                            <button type="button"
                                class="inline-flex shrink-0 justify-center items-center size-8 rounded-lg text-white bg-blue-600 hover:bg-blue-500 focus:z-10 focus:outline-none focus:bg-blue-500">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z">
                                    </path>
                                </svg>
                            </button>
                            <!-- End Send Button -->
                        </div>
                        <!-- End Button Group -->
                    </div>
                </div>
                <!-- End Toolbar -->
            </div>
            <!-- End Textarea -->
        </div>
    </div>


    <!-- MODAL FOR INFO ICON -->
    <div id="modal-info-icon-container">
        <div id="modal-info-icon">
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div
                    class="flex justify-between items-center border-b rounded-t-xl py-3 px-4 md:px-5 dark:border-neutral-700">
                    <img src="{{ asset('img/botpfp.jpg') }}" alt="" class="w-12 h-12 rounded-full ">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        About Navi Chat Support Bot
                    </h3>
                    <div class="flex items-center gap-x-1">
                        <div class="hs-tooltip inline-block">
                            <button type="button" id="close-modal-info-icon"
                                class="hs-tooltip-toggle size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                                <span
                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                                    role="tooltip">
                                    Close
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:p-5">
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        This bot is created by <strong>Fuujin</strong>. It serves as an assistant for the
                        <strong>Web-Based Bus (or Van) Online Reservation and Lost & Found System</strong>. Feel free to
                        ask anything regarding bus reservations, lost and found items, or other system-related queries.
                        The bot is designed to provide quick, efficient assistance to enhance your experience with the
                        platform.
                    </p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const chatSendRoute = "{{ route('chat.send') }}";
    const sendButton = document.getElementById('send-message');
    const messageContainer = document.getElementById('message-container');
    const textarea = document.getElementById('hs-textarea-ex-2');

    sendButton.addEventListener('click', function () {
        const message = textarea.value.trim();
        if (message === '') return;

        // ✅ User's message
        messageContainer.innerHTML += `<div class="text-right mb-2 p-2 bg-blue-500 text-white rounded-lg max-w-xs ml-auto">${message}</div>`;

        // ✅ Send message to backend
        axios.post(chatSendRoute, { message: message })
            .then(response => {
                const botReply = response.data.response;
                // ✅ Bot's response
                messageContainer.innerHTML += `<div class="text-left mb-2 p-2 bg-gray-200 text-gray-800 rounded-lg max-w-xs">${botReply}</div>`;
                messageContainer.scrollTop = messageContainer.scrollHeight;  // Auto-scroll
            })
            .catch(error => {
                console.error('Error:', error);
            });

        textarea.value = '';  // Clear input
    });

    // ✅ Send on "Enter" key press
    textarea.addEventListener('keypress', function (e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendButton.click();
        }
    });
    const openModal = document.getElementById('info-icon');
    const closeModal = document.getElementById('close-modal-info-icon');
    const myModal = document.getElementById('modal-info-icon');


    openModal.addEventListener('click', () => {
        myModal.style.display = 'block';
    });


    closeModal.addEventListener('click', () => {
        myModal.style.display = 'none';
    });


    window.addEventListener('click', (event) => {
        if (event.target === myModal) {
            myModal.style.display = 'none';
        }
    });
</script>