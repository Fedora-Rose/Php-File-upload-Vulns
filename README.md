# Php file upload Vulnerability

## Launch the server 
```bash
chmod +x ./server.sh
./server.sh
```
The server will launch on port 8000
### Notes: You need php installed on your system

## Exploit
- Open a web browser
- Open localhost:8000 and upload your php file you want to inject
- Visit localhost:8000/uploads/filename.php to run the file
### Notes: A sample exploit file for an RCE is in /VulnarableFile/
