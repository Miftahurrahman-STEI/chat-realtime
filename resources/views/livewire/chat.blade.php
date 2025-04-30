<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div wire:poll>
                        @foreach($messages as $message)
                            <div class="chat @if($message->from_user_id === auth()->id()) chat-end @else chat-start @endif ">
                                <div class="chat-image avatar">
                                    <div class="w-10 rounded-full">
                                    @if($message->from_user_id === auth()->id())
                                        <img
                                            alt="Tailwind CSS chat bubble component"
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Gibran_Rakabuming_2024_official_portrait.jpg/1200px-Gibran_Rakabuming_2024_official_portrait.jpg" />
                                        </div>
                                    @else
                                        <img
                                            alt="Tailwind CSS chat bubble component"
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/1200px-Prabowo_Subianto_2024_official_portrait.jpg" />
                                        </div>
                                    @endif
                                </div>
                                <div class="chat-header">
                                    <h1 class="font-bold text-xs">{{ $message->fromUser->name }}</h1>
                                    <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
                                </div>
                                <div class="chat-bubble">{{ $message->message }}</div>
                                <div class="chat-footer opacity-50">Delivered</div>
                            </div>
                        @endforeach

                        <div class="form-control">
                            <form action="" wire:submit.prevent="sendMessage">
                                <textarea id="" wire:model="message" class="textarea textarea-bordered w-full" placeholder="send your message...">
                                </textarea>
                                <button type="submit" class="submit btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
