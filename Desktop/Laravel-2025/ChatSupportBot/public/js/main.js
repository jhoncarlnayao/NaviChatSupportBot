





const chatSendRoute = "{{ route('chat.send') }}";
const sendButton = document.getElementById('send-message');
const messageContainer = document.getElementById('message-container');
const textarea = document.getElementById('hs-textarea-ex-2');

sendButton.addEventListener('click', function () {
    const message = textarea.value.trim();
    if (message === '') return;



    // ✅ User's message
    messageContainer.innerHTML += ` <li class="flex ms-auto gap-x-2 sm:gap-x-4">
<div class="grow text-end space-y-3">
    <div class="inline-block bg-blue-600 rounded-2xl p-4 shadow-sm">
    <p class="text-sm text-white">
    ${message}
    </p>
</div>
</div>
<span class="shrink-0 inline-flex items-center justify-center size-[48px] rounded-full bg-gray-600">
<span class="text-sm font-medium text-white leading-none"><img src="{{ asset('img/botpfp.jpg') }}" alt="" class="w-12 h-12 rounded-full "></span>
</span>
</li>`;

    // ✅ Send message to backend
    axios.post(chatSendRoute, { message: message })
        .then(response => {
            const botReply = response.data.response;
            // ✅ Bot's response
            messageContainer.innerHTML += `<li class="flex ms-auto gap-x-2 sm:gap-x-4 mt-7 ">
<span class="shrink-0 inline-flex items-center justify-center size-[48px] rounded-full bg-gray-600">
    <span class="text-xl font-medium text-white leading-none">
        <img src="{{ asset('img/botpfp.jpg') }}" alt="" class="w-12 h-12 rounded-full ">
    </span>
</span>
<div class="grow text-start space-y-3 ">
    <div class="inline-block bg-blue-600 rounded-2xl p-4 shadow-sm ">
        <div class="text-sm text-white">
            ${botReply}
        </div>
    </div>
</div>
</li>`;

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

// !!! MODAL FOR INFO ICON
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