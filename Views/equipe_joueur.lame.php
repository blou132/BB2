<section>
  <h2>Joueurs par équipe</h2>
  <table>
    <thead><tr><th>Équipe</th><th>Logo</th><th>Joueur</th><th>Rôle</th><th>Portrait</th></tr></thead>
    <tbody>
      <?php foreach ($rows as $r): ?>
        <tr>
          <td><?= htmlspecialchars($r['equipe']) ?></td>
          <td><?php if ($r['blason']): ?><img src="<?= htmlspecialchars($r['blason']) ?>" class="thumb" alt="logo équipe"><?php endif; ?></td>
          <td><?= htmlspecialchars($r['prenom'] . ' ' . $r['nom']) ?></td>
          <td><?= htmlspecialchars($r['poste']) ?></td>
          <td><?php if ($r['photo']): ?><img src="<?= htmlspecialchars($r['photo']) ?>" class="thumb" alt="portrait joueur"><?php endif; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>
