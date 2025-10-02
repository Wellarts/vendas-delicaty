<!DOCTYPE html>
<html lang="pt-BR">
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ3T2B4DW3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NZ3T2B4DW3');
</script>

    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte moderna do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .header-delicaty {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 32px;
            background: #fff;
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 24px 0 18px 0;
            margin-bottom: 18px;
        }
        .header-delicaty img {
            height: 70px;
            width: auto;
            border-radius: 12px;
            background: #f9f9f9;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .header-info {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .header-nome {
            font-size: 2rem;
            font-weight: 700;
            color: #ff9800;
            letter-spacing: 1px;
        }
        .header-instagram {
            font-size: 0.85rem;
            color: #d33644;
            font-weight: 500;
        }
        .header-tel {
            font-size: 0.85rem;
            color: #3668D3;
            font-weight: 500;
        }
        .catalogo-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            padding: 40px;
            max-width: 1200px;
            margin: auto;
        }
        .produto-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }
        .produto-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }
        .produto-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .produto-info {
            padding: 16px;
            text-align: center;
        }
        .produto-nome {
            font-size: 1.1rem;
            color: #ff9800;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .produto-codbar {
            font-size: 0.95rem;
            color: #757575;
            margin-bottom: 10px;
        }
        .produto-preco {
            font-size: 1.2rem;
            color: #444;
            font-weight: 600;
        }
        .categorias-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin: 32px auto 0 auto;
            max-width: 1200px;
        }
        .categoria-btn {
            background: #fff;
            border: 1px solid #ff9800;
            color: #ff9800;
            border-radius: 8px;
            padding: 8px 18px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .categoria-btn.active, .categoria-btn:hover {
            background: #ff9800;
            color: #fff;
        }

        /* Modal para zoom da imagem */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }
        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
        }
        .modal-content, .close {
            animation: zoom 0.3s ease-in-out;
        }
        @keyframes zoom {
            from { transform: scale(0.7); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .close {
            position: absolute;
            top: 30px;
            right: 50px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .header-delicaty {
                flex-direction: column;
                gap: 12px;
                padding: 18px 0 12px 0;
            }
            .header-nome {
                font-size: 1.3rem;
            }
            .produto-img {
                height: 160px;
            }
        }
    </style>

</head>

<body>
    
    <!-- Cabeçalho Delicaty -->
    <div class="header-delicaty" style="justify-content: space-between;">
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </div>
        <div style="flex: 1; text-align: left;">
            <div class="header-nome" style="color: #ff9800;">Catálogo</div>
        </div>
        <div class="header-info" style="align-items: flex-end; text-align: right; color: #bdbdbd; font-size: 0.85rem;">
            <div class="header-nome" style="font-size: 0.85rem; color: #bdbdbd;">Delicaty Acessórios</div>
            <div class="header-instagram" style="color: #bdbdbd;">
            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" style="height: 16px; vertical-align: middle; margin-right: 6px;">
            @delicatyacessorios
            </div>
            <div class="header-tel" style="color: #bdbdbd;">(87) 99931-7326</div>
        </div>
        </div>
    </div>

    <!-- Barra de categorias -->
    <div class="categorias-bar">
        <button class="categoria-btn active" onclick="filtrarCategoria('todas')">Todas</button>
        @php
            $categorias = $produtos->pluck('categoria.nome', 'categoria_id')->unique();
        @endphp
        @foreach($categorias as $catId => $catNome)
            @if($catNome)
                <button class="categoria-btn" onclick="filtrarCategoria('{{ $catNome }}')">{{ $catNome }}</button>
            @endif
        @endforeach
    </div>

    <div class="catalogo-container">
        @foreach($produtos as $produto)
            @if($produto->estoque >= 1)
                @php
                    $foto = 'default.jpg';
                    if (is_array($produto->foto) && !empty($produto->foto[0])) {
                        $foto = $produto->foto[0];
                    } elseif (is_string($produto->foto) && !empty($produto->foto)) {
                        $foto = $produto->foto;
                    }
                    $catNome = $produto->categoria->nome ?? '';
                @endphp

                <div class="produto-card" data-categoria="{{ $catNome }}">
                    <img src="{{ asset('storage/' . $foto) }}" alt="{{ $produto->nome }}" class="produto-img" onclick="openModal(this)">
                    <div class="produto-info">
                        <div class="produto-nome">{{ $produto->nome }}</div>                        
                        <div class="produto-preco">R$ {{ number_format($produto->valor_venda, 2, ',', '.') }}</div>
                        <div style="font-size: 10; color: #bdbdbd;" class="produto-codbar">Cod: {{ $produto->codbar }}</div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Modal de Imagem Ampliada -->
    <div id="imgModal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImg">
        <div id="modalInfo" style="text-align:center; margin-top:18px; color:#fff;">
            <div id="modalNome" style="font-size:1.3rem; font-weight:700; color:#ff9800;"></div>
            <div id="modalPreco" style="font-size:1.1rem; font-weight:600; color:#fff;"></div>
            <div id="modalCod" style="font-size:0.95rem; color:#bdbdbd;"></div>
            <button id="shareBtn" style="margin-top:18px; background:#ff9800; color:#fff; border:none; border-radius:8px; padding:10px 22px; font-size:1rem; font-weight:600; cursor:pointer;">Compartilhar</button>
        </div>
    </div>

    <script>
        function filtrarCategoria(categoria) {
            var cards = document.querySelectorAll('.produto-card');
            var btns = document.querySelectorAll('.categoria-btn');
            btns.forEach(btn => btn.classList.remove('active'));
            btns.forEach(btn => {
                if (btn.textContent === categoria || (categoria === 'todas' && btn.textContent === 'Todas')) {
                    btn.classList.add('active');
                }
            });
            cards.forEach(card => {
                if (categoria === 'todas' || card.getAttribute('data-categoria') === categoria) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function openModal(imgElement) {
            var card = imgElement.closest('.produto-card');
            var nome = card.querySelector('.produto-nome').textContent;
            var preco = card.querySelector('.produto-preco').textContent;
            var cod = card.querySelector('.produto-codbar').textContent;
            var modal = document.getElementById("imgModal");
            var modalImg = document.getElementById("modalImg");
            document.getElementById("modalNome").textContent = nome;
            document.getElementById("modalPreco").textContent = preco;
            document.getElementById("modalCod").textContent = cod;
            modal.style.display = "block";
            modalImg.src = imgElement.src;
            // Configura botão de compartilhamento
            var shareBtn = document.getElementById("shareBtn");
            shareBtn.onclick = function(e) {
                e.stopPropagation();
                if (navigator.share) {
                    navigator.share({
                        title: nome,
                        text: nome + "\n" + preco + "\n" + cod,
                        url: imgElement.src
                    }).catch(() => {});
                } else {
                    alert('Seu navegador não suporta compartilhamento direto.');
                }
            };
        }

        function closeModal() {
            document.getElementById("imgModal").style.display = "none";
        }

        // Fecha com ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === "Escape") {
                closeModal();
            }
        });
    </script>
</body>
</html>
