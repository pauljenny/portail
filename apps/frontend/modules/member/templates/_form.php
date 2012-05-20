<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('member/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="well">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <?php if (!$form->getObject()->isNew()): ?>
           <?php endif; ?>
          <input class="btn btn-primary" type="submit" value="Enregistrer" />

          &nbsp;<a class="btn" href="<?php echo url_for('assos_show',array('login' => ($form->getObject()->isNew()) ? $sf_request->getParameter('login',null) : $form->getObject()->getAsso()->getLogin())) ?>">Retour à l'association</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Supprimer', 'member/delete?id='.$form->getObject()->getId(), array('method' => 'delete',
                'confirm' => 'Êtes-vous sur de vouloir supprimer défintivement ce membre ?', 'class' => 'btn btn-danger')) ?>
                  <?php endif; ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <?php foreach($form as $widget): ?>
      <?php if(!$widget->isHidden()): ?>
      <tr>
        <th><?php echo $widget->renderLabel() ?></th>
        <td>
          <?php echo $widget->renderError() ?>
          <?php echo $widget ?>
        </td>
      </tr>
      <?php endif ?>
      <?php endforeach ?>
    </tbody>
  </table>
</form>
