import socket

def client():
    host = socket.gethostname()
    port = 22000
    
    client_socket = socket.socket()
    client_socket.connect((host, port))

    message = input("Enter your message (Type 'bye' to exit): ")

    while message.lower().strip() != 'bye':
        client_socket.send(message.encode())
        data = client_socket.recv(1024).decode()

        print("Received from server: " + data)
        message = input("Enter your message (Type 'bye' to exit): ")
    client_socket.close()

if __name__ == "__main__":
    client()
