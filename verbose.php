<h1>AltoRouter</h1>
<h3>Current request: </h3>

<pre>
<?php var_dump($dispatcher->getRoute()); ?>
</pre>

<h3>Try these requests: </h3>
<p><a href="<?php echo $dispatcher->router->generate('app_home', array('appid' => 1)); ?>">GET <?php echo $dispatcher->router->generate('app_home', array('appid' => 1)); ?></a></p>
<p><a href="<?php echo $dispatcher->router->generate('app_home', array('appid' => 2)); ?>">GET <?php echo $dispatcher->router->generate('app_home', array('appid' => 2)); ?></a></p>
<p><a href="<?php echo $dispatcher->router->generate('app_home', array('appid' => 3)); ?>">GET <?php echo $dispatcher->router->generate('app_home', array('appid' => 3)); ?></a></p>
<p><a href="<?php echo $dispatcher->router->generate('users_show', array('id' => 5)); ?>">GET <?php echo $dispatcher->router->generate('users_show', array('id' => 5)); ?></a></p>
<p><form action="<?php echo $dispatcher->router->generate('users_do', array('id' => 10, 'action' => 'update')); ?>" method="post"><button type="submit"><?php echo $dispatcher->router->generate('users_do', array('id' => 10, 'action' => 'update')); ?></button></form></p>