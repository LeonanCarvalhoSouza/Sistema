<?php \Classes\ClassLayout::setHead('Login','Entre com seu usuário e senha'); ?>

<div class="fundo">
	<form name="formLogin" id="formLogin" action="<?php echo DIRPAGE.'controller/controllerLogin'; ?>" method="post">
		<div class="login">
			<div class="loginLogomarca float w100 center">
				<img src="<?php echo DIRPAGE.'img/logomarca-da-wef.png'; ?>" alt="Logomarca da WEF">
			</div>
			<div class="loginFormulario float w100">
				<input class="float w100 h40" type="email" name="email" id="email" placeholder="Email:" required>
				<input class="float w100 h40" type="password" name="senha" id="senha" placeholder="Senha:" required>
				<input class="float h40 center" type="submit" value="Entrar">
				<div class="loginTextos float center"><a href="<?php echo DIRPAGE.'esqueci-minha-senha'; ?>">Esqueci minha senha</a>
			</div>
		</div>
	</form>
</div>
<?php \Classes\ClassLayout::setFooter(); ?>