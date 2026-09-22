<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
        
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 460px;
            padding: 36px;
        }

        h2 {
            color: #1e293b;
            font-size: 26px;
            margin-bottom: 6px;
            text-align: center;
        }

        .subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
         font-family: 'Times New Roman', Times, serif;
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            display: block;
            margin-top: 4px;
        }

        .success {
            background: #e0f7e9;
            color: #16a34a;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #3b82f6;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
        }

        button:hover {
            background: #2563eb;
            transform: translateY(-1px);
        }

        .hint {
            text-align: center;
            color: #94a3b8;
            font-size: 13px;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Formulario de Registro</h2>
        <p class="subtitle">Creá tu cuenta en segundos</p>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ej: María Pérez">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="tucorreo@ejemplo.com">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetí tu contraseña">
            </div>

            <button type="submit">Registrarse</button>
            <p class="hint">🔒 Tus datos están protegidos</p>
        </form>
    </div>
</body>
</html>