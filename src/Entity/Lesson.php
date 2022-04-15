<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LessonRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: LessonRepository::class)]
class Lesson
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $video;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\ManyToOne(targetEntity: Section::class, inversedBy: 'lessons')]
    #[ORM\JoinColumn(nullable: false)]
    private $section;

    #[ORM\OneToMany(mappedBy: 'lesson', targetEntity: Annexe::class)]
    private $annexes;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'lesson')]
    private $user;

    public function __construct()
    {
        $this->annexes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @return Collection<int, Annexe>
     */
    public function getAnnexes(): Collection
    {
        return $this->annexes;
    }

    public function addAnnex(Annexe $annex): self
    {
        if (!$this->annexes->contains($annex)) {
            $this->annexes[] = $annex;
            $annex->setLesson($this);
        }

        return $this;
    }

    public function removeAnnex(Annexe $annex): self
    {
        if ($this->annexes->removeElement($annex)) {
            // set the owning side to null (unless already changed)
            if ($annex->getLesson() === $this) {
                $annex->setLesson(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }  

}
