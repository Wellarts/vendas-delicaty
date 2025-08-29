<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .catalogo-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            padding: 32px;
        }
        .produto-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            overflow: hidden;
            border: 2px solid #ffa726;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.2s;
        }
        .produto-card:hover {
            box-shadow: 0 4px 16px rgba(255,167,38,0.15);
        }
        .produto-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #eee;
        }
        .produto-info {
            padding: 16px;
            text-align: center;
        }
        .produto-nome {
            font-size: 1.1rem;
            color: #ff9800;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .produto-preco {
            font-size: 1.2rem;
            color: #757575;
            margin-bottom: 4px;
        }
        .produto-estoque {
            font-size: 0.95rem;
            color: #bdbdbd;
        }
    </style>
</head>
<body>
    <div class="catalogo-container">
        @foreach($produtos as $produto)
            @if($produto->estoque >= 1)
                <div class="produto-card">
                    @php
                        $foto = 'default.jpg';
                        if(is_array($produto->foto) && !empty($produto->foto[0])) {
                            $foto = $produto->foto[0];
                        } elseif(is_string($produto->foto) && !empty($produto->foto)) {
                            $foto = $produto->foto;
                        }
                      //  dd(storage_path('public\\' . $foto));
                    @endphp
                    <img src="{{ asset('storage/' . $foto) }}" alt="{{ $produto->nome }}" class="produto-img">
                    <div class="produto-info">
                        <div class="produto-nome">{{ $produto->nome }}</div>
                        <div class="produto-nome">{{ $produto->codbar }}</div>
                        <div class="produto-preco">R$ {{ number_format($produto->valor_venda, 2, ',', '.') }}</div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>