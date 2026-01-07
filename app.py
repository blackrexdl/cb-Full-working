from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# A dictionary to store user credentials (in practice, use a database)
users = {
    'user1': 'password1',
    'user2': 'password2'
}

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form.get('username')
    password = request.form.get('password')

    if username in users and users[username] == password:
        # Authentication successful
        return 'Login Successful'
    else:
        # Authentication failed, redirect back to the login page
        return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)
