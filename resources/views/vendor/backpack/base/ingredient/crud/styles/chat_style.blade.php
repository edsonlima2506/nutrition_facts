<style>
    #chat-container {
        position: fixed;
        bottom: -400px;
        right: 50px;
        width: 300px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 10px 10px 0 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        padding: 0;
        z-index: 1000;
        opacity: 0;
        transition: all 0.5s ease;
    }

    #chat-container.show {
		bottom: 90px;
		opacity: 1;
    }

    #chat-header {
		width: 100%;
		background-color: var(--primary);
		color: var(--dark);
		padding: 10px;
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		display: flex;
		align-items: center;
		justify-content: space-between;
    }

    #chat-body {
        width: 100%;
        background-color: white;
        border-bottom-left-radius: 10px;
        overflow-y: auto;
        padding: 10px;
    }

    .chat-message {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .message-bubble {
        background-color: #e9ecef;
        color: #212529;
        padding: 10px;
        border-radius: 0 10px 10px 10px;
        max-width: 200px;
        font-size: 14px;
    }
</style>