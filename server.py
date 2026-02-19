import socket
def server():
    host = socket.gethostname()
    port = 22000

    s = socket.socket()
    s.bind((host, port))

    s.listen(2)

    c, address = s.accept()
    print(f"Connected to: {address}")

    while True:
        data = c.recv(1024).decode()
        if not data:
            break

        print(f"Received from client: {data}")
        response = input("Enter response to send to the client: ")
        c.send(response.encode())

    c.close()

if __name__ == "__main__":
    server()
