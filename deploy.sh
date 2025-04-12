#!/bin/bash

# Activer le mode strict pour arrêter en cas d'erreur
set -e

# Définir le dossier du projet (où le script est exécuté)
PROJECT_DIR="$(pwd)"
GIT_REPO="git@github.com:webstartMaterial/instantchic.git"

echo "📍 Répertoire du projet : $PROJECT_DIR"

# Vérifier si le dossier contient déjà un dépôt Git
if [ -d "$PROJECT_DIR/.git" ]; then
    echo "📥 Le projet existe déjà, mise à jour avec Git pull..."
    cd "$PROJECT_DIR"

    # Sauvegarder temporairement les modifications locales
    git stash push -m "Sauvegarde temporaire" --keep-index
    
    # Mettre à jour le repo sans toucher au fichier .env
    git pull origin main
    
    # Restaurer les modifications locales
    git stash pop || echo "ℹ️ Aucun changement à restaurer"
else
    echo "🆕 Le dossier existe mais n'est pas un repo Git."

    # Option 1 : Supprimer et re-cloner (⚠️ SUPPRIME TOUT)
    # echo "⚠️ Suppression du dossier existant et clonage du projet..."
    # rm -rf "$PROJECT_DIR"
    # git clone "$GIT_REPO" "$PROJECT_DIR"
    
    # Option 2 : Ajouter Git si nécessaire
    echo "📦 Initialisation Git et récupération du dépôt..."
    cd "$PROJECT_DIR"
    git init
    git remote add origin "$GIT_REPO"
    git fetch origin
    git checkout -t origin/main
fi

